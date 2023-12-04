<?php
    require_once('db.php');
    function login($email, $password)
    {
        $con = getConnection();
        $sql = "select * from persons where email='{$email}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);

        if($user){
            return $user;
        }
        else{
            return false;
        }
    }

    function signup($user)
    {
        $name= $user['name'];
        $phone = $user['phone'];
        $email = $user['email'];
        $password = $user['password'];
        
        $con = getConnection();

        $sql = "insert into persons (name, phone, email, password)
        VALUES ('$name', '$phone', '$email', '$password')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function emailCheck($email)
    {
        $con = getConnection();
        $sql = "select * from persons where email='$email'";

        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
               
        if($user){
            return $user;
        }
        else{
            return false;
        }
    }
?>