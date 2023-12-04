<?php
    require_once('../model/uModel.php');
    {
        $email=$_POST['email'];

        $available = emailCheck($email);
        
        if($email=="")
        {
            echo "Empty Email !!!";
        }
        else if(!$available)
        {
            echo "This email address is available";
        }
        else{
            echo "This email address is not available!!!";
        }
    }
    
?>