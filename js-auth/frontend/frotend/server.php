<?php
require_once 'dbcon.php';

if (isset($_POST['inquire_data'])) {
    $name = mysqli_real_escape_string($db, $_POST['clientName']);
    $email = mysqli_real_escape_string($db, $_POST['clientEmail']);
    $phone = mysqli_real_escape_string($db, $_POST['clientPhone']);
    $message = mysqli_real_escape_string($db, $_POST['clientMessage']);
    $product_id = mysqli_real_escape_string($db, $_POST['product_id']);
    $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
    
    // Insert inquiry into database
    $query = "INSERT INTO inquiries (product_id, name, phone, email, message) 
              VALUES ('$product_id', '$name', '$phone', '$email', '$message')";
    if (mysqli_query($db, $query)) {
        // Send email notification
        $to = 'jemimakibandi378@gmail.com';
        $subject = 'New Inquiry Received';
        $message = "Hello,\n\nA new inquiry has been received:\n\nName: $name\nPhone: $phone\nEmail: $email\nInquiry for product: $product_name\nMessage: $message";
        $headers = "From: $email"; // Change to your email address

        // Send email
        mail($to, $subject, $message, $headers);

        // Redirect to product details page
        $location = "shop.php";
        header("Location: $location");
        exit();
    } else {
        $_SESSION['err'] = "Can't Inquire, Server Error";
        $location = "shop.php";
        header("Location: $location");
        exit();
    }
}