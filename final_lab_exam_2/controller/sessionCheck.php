<?php 
     if (!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['flag'])){
        header('location: login.php');
    }


?>