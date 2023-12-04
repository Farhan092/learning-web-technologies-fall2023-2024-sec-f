<?php
session_start();
require_once('../model/uModel.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if ($name == "" || $phone == "" || $email == "" || $password == "" || $confirmPassword == "") {
    $_SESSION['message'] = "Null input!!! Please fill up all the fields";
} elseif ($confirmPassword != $password) {
    $_SESSION['message'] = "Password do not match";
} else {
    $user = ['name' => $name, 'phone' => $phone, 'email' => $email, 'password' => $password];
    $result = signup($user);

    if ($result) {
        $_SESSION['flag'] = 'true';
        $_SESSION['user'] = $user;
        header('Location: ../view/login.php');
        exit(); 
    } else {
        $_SESSION['message'] = "Registration failed. Please try again.";
    }
}

header('Location: ../view/register.php');
exit();
?>
