<?php 
session_start();
require_once '../frontend/frotend/dbcon.php';

if (isset($_POST['product_upload_data'])) {
    $productName = $_POST["productName"];
    $productCategory = $_POST["productCategory"];
    $productDescription = $_POST["productDesc"];
    $productAmount = $_POST["productAmount"];

    $uploadDirectory = "img/";
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
    $uploadedFilesString = implode("::", $uploadedFiles);

    $stmt = $db->prepare("INSERT INTO `product`(`name`, `amount`, `category`, `description`, `uploaded_files`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $productName, $productAmount, $productCategory, $productDescription, $uploadedFilesString);

    if ($stmt->execute()) {
        $_SESSION['succ'] = "Product Successfully Added";
        header('location: products.php');
    } else {
        $_SESSION['err'] = "Product Unsuccessfully Added";
        header('location: products.php');
    }
    $stmt->close();
    $db->close();
}
if (isset($_POST['sale_upload_data'])) {
    $productId = mysqli_real_escape_string($db, $_POST['sale_product']);
    $productPrice = mysqli_real_escape_string($db, $_POST['sale_price']);
    $clientName = mysqli_real_escape_string($db, $_POST['client_name']);
    $clientPhone = mysqli_real_escape_string($db, $_POST['client_phone']);

    $query = "SELECT * FROM product WHERE product_id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $productDetails = $result->fetch_assoc();
        $productName = $productDetails['name'];
        $productCategory = $productDetails['category'];
        $productDescription = $productDetails['description'];

        // Correct the SQL statement: The VALUES clause had one '?' too many and missed a closing parenthesis
        $insertStmt = $db->prepare("INSERT INTO `sales`(`prod_id`, `product_cost`, `product_category`, `product_name`, `client_name`, `client_phone`) VALUES (?, ?, ?, ?, ?, ?)");
        $insertStmt->bind_param("ssssss", $productId, $productPrice, $productCategory, $productName, $clientName, $clientPhone);

        if ($insertStmt->execute()) {
            $_SESSION['succ'] = "Product Successfully Added";
        } else {
            $_SESSION['err'] = "Product Unsuccessfully Added";
        }
        $insertStmt->close();
    } else {
        $_SESSION['err'] = "No product found with the given ID";
    }
    $stmt->close();
    header('location: sales.php');
    $db->close();
} else {
    $_SESSION['err'] = "No data submitted";
    header('location: sales.php');
}
?>