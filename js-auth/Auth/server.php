<?php 
session_start();
require_once 'dbcon.php';

if (isset($_POST['login'])) {
    // Check if the $db variable is set and is an instance of mysqli
    if (!isset($db) || !($db instanceof mysqli)) {
        error_log("Database connection error at the start of the login script.");
        $_SESSION['err'] = "Internal server error. Please try again later.";
        header('Location: login.php');
        exit();
    }

    $email = mysqli_real_escape_string($db, $_POST['emailadd']);
    $password = mysqli_real_escape_string($db, $_POST['pass']);

    if (empty($email) || empty($password)) {
        $_SESSION['err'] = "* Email and Password are required *";
        header('Location: login.php');
        exit();
    }

    $query = "SELECT * FROM `managers` WHERE `user_email` = ?";
    if (!($stmt = $db->prepare($query))) {
        error_log("Failed to prepare statement: " . $db->error);
        $_SESSION['err'] = "Internal server error. Please try again later.";
        header('Location: login.php');
        exit();
    }

    if (!$stmt->bind_param("s", $email)) {
        error_log("Failed to bind parameters: " . $stmt->error);
        $_SESSION['err'] = "Internal server error. Please try again later.";
        header('Location: login.php');
        exit();
    }

    if (!$stmt->execute()) {
        error_log("Failed to execute statement: " . $stmt->error);
        $_SESSION['err'] = "Internal server error. Please try again later.";
        header('Location: login.php');
        exit();
    }

    $result = $stmt->get_result();
    if ($result->num_rows != 1) {
        $_SESSION['err'] = "Invalid credentials Here";
        header('Location: login.php');
        exit();
    }
    $row = $result->fetch_assoc();
    if ($password !== $row['user_password']) { // Direct comparison since passwords are not hashed
        error_log("Password verification failed for user: $email");
        $_SESSION['err'] = "Invalid credentials";
        header('Location: login.php');
        exit();
    }
    

    // Success
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_email'] = $row['user_email'];
    setcookie('TOOLTRADITIONS2024', $_SESSION['user_id'], time() + (86400 * 30), "/");
    header('Location: ../Admin/dashboard.php');
    exit();
}

if (isset($_POST['register'])) {
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $fpass = $_POST['pword'];
    $lpass = $_POST['cpword'];

    if (empty($fname) || empty($email) || empty($fpass) || empty($lpass)) {
        $_SESSION['error'] = "All fields are required.";
        header('Location: register.php');
        exit();
    }

    if ($fpass !== $lpass) {
        $_SESSION['error'] = "Passwords do not match.";
        header('Location: register.php');
        exit();
    }

    $databasePassword = md5($fpass);
    $sql = "INSERT INTO `managers` (`user_name`, `user_email`, `user_password`) VALUES (?, ?, ?)";

    if ($stmt = $db->prepare($sql)) {
        $stmt->bind_param("sss", $fname, $email, $databasePassword);

        if ($stmt->execute()) {
            $_SESSION['succ'] = 'Thank you for registering.';
            header('Location: login.php');
            exit();
        } else {
            $_SESSION['error'] = 'Error: ' . $stmt->error;
            header('Location: register.php');
            exit();
        }
    } else {
        $_SESSION['error'] = 'Database prepare error.';
        header('Location: register.php');
        exit();
    }
}
if (isset($_REQUEST['logout'])) {
    setcookie('TOOLTRADITIONS2024', '', time() - 3600, "/");
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}