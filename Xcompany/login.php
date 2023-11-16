<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        if ($_SESSION['User'] == $username && $_SESSION['Pass'] == $password) {
            // Set cookies and redirect to the dashboard
            $cookie_username = $_SESSION['User'];
            $cookie_password = $_SESSION['Pass'];
            setcookie($cookie_username, $cookie_password, time() + (86400 * 20), "/");
            
            header("location: dashboard.php");
            exit(); // Make sure to exit to prevent further execution of the script
        } elseif ($_SESSION['User'] == $username && $_SESSION['Pass'] == $password && isset($_POST['remember'])) {
            // Handle "Remember Me" checkbox if needed
        } else {
            echo "Wrong Username or Password!";
        }
    } else {
        echo "Please fill in both username and password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <table border="1" width="60%" cellspacing="0" align="center">
        <tr>
            <td>
                <img src="xcompany.jpg" width="100px" height="70px" align="left">
                <p align="right">
                    <a href="index.php">Home |</a>
                    <a href="login.php">Login |</a>
                    <a href="registration.php">Registration</a>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2" height="100px">
                <form method="post">
                    <fieldset>
                        <legend>LOGIN</legend>
                        User Name: <input type="text" name="username" value=""> <br/>
                        Password: <input type="password" name="password" value=""><br/><hr>
                        <input type="checkbox" name="remember" value="">Remember Me 
                        <input type="submit" name="submit" value="Submit">
                        <a href="forgetPassword.php">Forgot Password?</a>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="2" height="10px" align="center">Copyright © 2017</td>
        </tr>
    </table>
</body>
</html>
