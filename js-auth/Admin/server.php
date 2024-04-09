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