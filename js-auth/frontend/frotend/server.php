<?php
require_once 'dbcon.php';

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