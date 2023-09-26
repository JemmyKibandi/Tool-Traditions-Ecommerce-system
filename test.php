<?php
// Initialize the variables
$consumer_key = 'Lms5EIf2gK16o1sptYPaA3HsfbGUd7fv';
$consumer_secret = 'dgfk1IefQx1SnG1A';
$Business_Code = '174379';
$Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
$Type_of_Transaction = 'CustomerPayBillOnline';
$Token_URL = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$phone_number = $_POST['phone_number'];
$OnlinePayment = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
$total_amount = $_POST['amount'];
$CallBackURL = 'https://2f50f430.ngrok.io/callback.php?key=your password';
$Time_Stamp = date("Ymdhis");
$password = base64_encode($Business_Code . $Passkey . $Time_Stamp);
?>