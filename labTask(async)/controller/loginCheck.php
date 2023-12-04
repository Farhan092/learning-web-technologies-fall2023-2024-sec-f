<?php
    session_start();
    require_once('../model/uModel.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == "" || $password == "" ){
    
        echo "Invalid email or password!";
    
    }
    else{
        $result = login($email, $password);
        if($result)
        {
            $_SESSION['flag'] = 'true';
            header('location: ../view/home.php');
        }
        else{
            header('location: ../view/register.php');
        }
        
    }
?>