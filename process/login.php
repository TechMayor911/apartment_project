<?php 
session_start();
require_once "../classes/Methods.php";


if (isset($_POST["btn"])) {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    // print_r($_POST);

    if (empty($email)|| empty($password) ) {
        $_SESSION["error"] = "All fields are required!";
        header("location: ../login.php");
        exit;
    }

    $user = new User();
    $userData = $user->login($email, $password);

    if ($userData) {
        $_SESSION["user"] = $userData;
        $_SESSION["login_success"] = "Welcome " . $userData['name'] . "!";
        header("location: ../dashboard.php");
        exit;

    }else{
        $_SESSION["errormsg"] = "Error signing up user.";
        header("location: ../login.php");
        exit;
    }

    }else{
        $_SESSION["errormsg"] = "Form not submitted correctly.";
        header("location: ../signup.php");
        exit;
    }




    





?>