<?php
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if (!preg_match('/^[a-zA-Z0-9\.\-_]+$/', $username))
    {
        echo "Invalid username format";
    }
    elseif (strlen($username) < 2)
    {
        echo "Username must contain at least two characters";
    }
    elseif (strlen($password) < 8) 
    {
        echo "Password must be at least eight characters";
    }
    elseif (!preg_match('/[@#$%]/', $password))
    {
        echo "Password must contain at least one of the special characters (@, #, $, %)";
    }
    else
    {
        echo "Valid user";
    }
?>