<?php 
session_start();

if(isset($_POST['submit']))
{
    if($_POST['password'] != " " && $_POST['confirmpassword'] != " " && $_POST['name'] != " " && $_POST['username'] != " " && $_POST['email'] != " " && $_POST['day'] != " " && $_POST['month'] != " " && $_POST["year"] != " " && isset($_POST['gender']))
    {
        if(($_POST['password'] == $_POST['confirmpassword']))
        {      
        $_SESSION["Temp"] = $_POST['name'];
        $_SESSION["User"] = $_POST['username'];
        $_SESSION['Mail']=$_POST['email'];
        $_SESSION['Pass'] =$_POST['password'];
        $_SESSION['cpass'] = $_POST['confirmpassword'];
        $_SESSION['Gender'] = $_POST['gender'];
        $_SESSION['Day'] = $_POST['day'];
        $_SESSION['Month'] = $_POST['month'];
        $_SESSION['Year'] = $_POST['year'];

        header("location: index.php");

        }
        else if ($_POST['password'] != $_POST['confirmpassword'])
        {
            echo "Enter the password correctly";
            return;
        }
    }
    else
    {
        echo "Fill up the form properly";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
<table border="1" width="60%" cellspacing="0" align ="center">
        <tr>
            <td><img src="xcompany.jpg" width="100px" height="70px" align ="left">
            <br>
                <p align = "right"><a href="index.php">Home |</a>
                <a href="login.php" >Login |</a>
                <a href="registration.php" >Registration</a></p>
            </td>

         </tr>
         <tr>
            <td colspan="2" height="100px">
                <form method="post">
                    <fieldset>

                    <legend>Registration</legend>
                    Name: <input type="text" name="name" value=""> <br/><hr>
                    Email: <input type="email" name="email"value= ""><br/><hr>
                    Username: <input type="text" name="username"value= ""><br/><hr>
                    Password: <input type="password" name="password"value= ""><br/><hr>
                    Confirm Password: <input type="password" name="confirmpassword"value= ""><br/><hr>
                        <fieldset>
                            <legend> Gender </legend>
                            <input type="radio" name="gender"value= "">Male
                            <input type="radio" name="gender"value= "">Female
                            <input type="radio" name="gender"value= "">Other
                        </fieldset>
                   
                    <hr>                  
                        <fieldset>
                            <legend> Date of Birth</legend>
          
                        <input type="text" name="day" value="" size= 1 /> / <input type="text" name="month" value="" size= 1 /> / <input type="text" name="year" value="" size= 1 /> <i>(dd mm yyyy)</i><br/> <hr> 
                        </fieldset>                   
                    <hr>
                    
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                    </fieldset>

            </form>
        </td>
         </tr>
         <tr>
            <td colspan="2" height="10px" align="center">Copyright © 2023</td>
         </tr>
   
        </table>   
</body>
</html>

