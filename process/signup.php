<?php
session_start();
require_once "../classes/Methods.php";

if (isset($_POST["btn"])) {
    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if ($password !== $cpassword) {
        $_SESSION["error"] = "Passwords do not match!";
        header("location: ../signup.php");
        exit;
    }

    
    if (empty($fullname) || empty($email) || empty($password) || empty($cpassword)) {
        $_SESSION["error1"] = "All fields are required!";
        header("location: ../signup.php");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["error4"] = "Invalid email format!";
        header("location: ../signup.php");
        exit;
    }

    $user = new User();

    if ($user->register($fullname, $email, $password)) {
        $_SESSION["success"] = "Welcome $fullname, you signed up successfully!";
        header("location: ../index.php");
        exit;
    } else {
        $_SESSION["error2"] = "Error signing up user.";
        header("location: ../signup.php");
        exit;
    }
} else {
    $_SESSION["error3"] = "Form not submitted correctly.";
    header("location: ../signup.php");
    exit;
}
?>