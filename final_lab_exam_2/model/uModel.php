<?php
    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from userinfo where username='{$username}' and password='{$password}'";
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
        $name = $user['name'];
        $username = $user['username'];
        $email = $user['email'];
        $password = $user['password'];
        $user_Type = $user['userType'];

        $con = getConnection();
        $sql = "INSERT INTO userinfo (name, username, email, password, userType)
        VALUES ('$name', '$username', '$email', '$password', '$user_Type')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function seeProfile($username){
        $con = getConnection();
        $sql = "select * from userinfo where username='$username'";
        $result = mysqli_query($con, $sql);
        $users = [];      
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }   
        return $users;
    }

?>