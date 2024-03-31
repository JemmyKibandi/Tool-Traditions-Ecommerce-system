<?php
require_once 'dbcon.php';

if (isset($_REQUEST['product_upload_data'])) {
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
            $fileName = basename($name);
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