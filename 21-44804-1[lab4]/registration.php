<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];

        if (!preg_match('/^[a-zA-Z0-9.\-_]{2,}$/', $username))
        {
            echo "Username is not valid";
        }
        elseif (strlen($password) < 8 || !preg_match('/[@#$%]/', $password))
        {
          echo "Password is not valid. It must be at least 8 characters long and contain one of the special characters.";
        }
        elseif ($password != $confirmPassword)
        {
            echo "Password do not match.";
        }
        else
        {
            echo "Registration is successful!";
        }
    }
?>
