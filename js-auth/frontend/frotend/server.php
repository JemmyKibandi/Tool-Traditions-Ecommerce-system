text/x-generic server.php ( PHP script, ASCII text, with CRLF line terminators )
<?php 
require_once 'dbcon.php';

if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    //ensure that form fields are filled in properly
    if (empty($email)) {
        $_SESSION['err'] = "* Email is required *";
        header('location: index.php');
        exit();
    }
    if (empty($password)) {
        $_SESSION['err'] = "* Password is required *";
        header('location: index.php');
        exit();
    }
    if (strlen($password) >= 8) {
        $_SESSION['err'] = "* Password is too long *";
        header('location: index.php');
        exit();
    }
    if (strlen($password) < 3) {
        $_SESSION['err'] = "* Password is too short*";
        header('location: index.php');
        exit();
    }
    
        $query = "SELECT * FROM `user` WHERE `user_email`='$email' ";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) != 1) {
            $_SESSION['err'] = "Enter correct Email/password";
            header('location: index.php');
            exit();
        } else {
            $password = md5($password);
            $query = "SELECT * FROM `user` WHERE `user_email` ='$email' AND `user_password` ='$password'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 1) {
                $row = $result->fetch_assoc();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_email'] = $row['user_email'];
                setcookie('CULLENMEDICALSHOP2024', $_SESSION['user_id'], time() + (86400 * 30), "/");
             
                header('location: index.php');
                        exit();
                } else {
                $_SESSION['err'] = " Wrong Password";
                header('location: index.php');
                exit();
            }
        }
    }
if (isset($_REQUEST['logout'])){
    setcookie('CULLENMEDICALSHOP2024', '', time() - 3600, "/");
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}
if (isset($_REQUEST['product_upload_data'])){
    // Retrieve form data
    $productName = $_POST["product_name"];
    $productTag = $_POST["product_tag"];
    $productCategory = $_POST["product_category"];
    $productDescription = $_POST["product_description"];
    
    // Perform any necessary validation here
    
    // File upload handling
    $uploadDirectory = "uploads/"; // Specify the directory where you want to store the uploaded files
    $uploadedFiles = array();
    
    if (!empty($_FILES['files']['name'][0])) {
        foreach ($_FILES['files']['name'] as $key => $name) {
            $fileTmpName = $_FILES['files']['tmp_name'][$key];
            $fileType = $_FILES['files']['type'][$key];
            $fileName= basename($name);
            $fileDestination = $uploadDirectory . $fileName;
            
            if (move_uploaded_file($fileTmpName, $fileDestination)) {
                array_push($uploadedFiles, $fileName);

            }
        }
    }
 // Implode uploaded files array into a comma-separated string
$uploadedFilesString = implode("::", $uploadedFiles);

// Prepare and bind the SQL statement
$stmt = $db->prepare("INSERT INTO medical_products (product_name, product_tag, product_category, product_desc, product_images) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $productName, $productTag, $productCategory, $productDescription, $uploadedFilesString);

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['succ'] = "Product Successfully Added";
        header('location: shop.php');
           } else {
            $_SESSION['err'] = "Product Unsuccessfully Added";
            header('location: shop.php');
               }

    // Close db$dbection
    $stmt->close();
    $db->close();
}
if (isset($_POST['inquire_data'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $comment = mysqli_real_escape_string($db, $_POST['comment']);
    $product_id = mysqli_real_escape_string($db, $_POST['product_id']);
    $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
    $location = "https://cullen.co.ke/product-details.php?product=$product_id";
    $query = "INSERT INTO `customers`(`user_name`, `user_email`, `user_comment`, `product_id`) VALUES ('$name', '$email', '$comment', '$product_id')";
    
    if (mysqli_query($db, $query)) {
        // Send email notification
        $to = 'jemimakibandi378@gmail.com';
        $subject = 'New Inquiry Received';
        $message = "Hello,\n\nA new inquiry has been received:\n\nName: $name\nEmail: $email\nInquiry for product: $product_name\nComment: $comment";
        $headers = "From: $email"; // Change to your email address
        
        // Send email
        mail($to, $subject, $message, $headers);
        
        // Redirect to product details page
        header("Location: $location");
        exit();
    } else {
        $_SESSION['err'] = "Can't Inquire, Server Error";
        header("Location: $location");
        exit();
    }
}
?>