<?php
    require_once('../model/uModel.php');
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['userType'])) {
        $userType = $_POST['userType'];
    }
    else{
        $userType="";
    } 

    if($name == "" || $username == "" || $email == "" || $password == "" )
    
    {
        $user = ['name'=> $name, 'username'=> $username, 'email'=>$email, 'password'=> $password,'userType'=> $userType];
            $status = signup($user);
            
            if ($status){
                header('Location: ../view/login.php');               
            }
        }
?>