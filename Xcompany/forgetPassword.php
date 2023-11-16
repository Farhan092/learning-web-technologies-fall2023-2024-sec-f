<?php
session_start();


if(isset($_POST['submit']))
{
    if($_POST['email'] != "")
    {
        $_SESSION['emailer'] = $_POST['email'];
        header('location: login.php');
    }
    else 
    {
        echo "Please provide a valid email!!";
    }
}



?>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
<table border="1" width="60%" cellspacing="0" align ="center">
        <tr>
        <td><img src="xcompany.jpg" width="100px" height="70px" align ="left">
                <p align = "right"><a href="index.php">Home |</a>
                <a href="login.php" >Login |</a>
                <a href="registration.php" >Registration</a></p>
            </td>

         </tr>
         <tr>
            <td colspan="2" height="100px">
                <form method="post">
                    <fieldset>

                    <legend>FORGOT PASSWORD</legend>
                    Email: <input type="email" name="email"value= ""><br/><hr>
                    <input type="submit" name="submit" value="Submit">
                    
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
