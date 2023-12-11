<?php
    session_start();
    require_once('../model/uModel.php');
  
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == "" ){
    
        echo "Null username or password!";
    
    }else{
        $results = login($username, $password);

        if($results)
        {
            if ($results['userType'] == "admin"){
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $username;
                header('location: ../view/adminDashboard.php');
            }
            elseif ($results['userType'] == "buyer") {
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $username;
                header('location: ../view/buyerDashboard.php');
            }
            elseif ($results['userType'] == "seller") {
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $username;
                header('location: ../view/sellerDashboard.php');
            }
        }
        else{
                echo "Invalid user  !!!";
            }
        
    }
?>
?>