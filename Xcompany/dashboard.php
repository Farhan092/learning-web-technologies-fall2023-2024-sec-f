<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
<table border="1" width="70%" cellspacing="0" align ="center">
        <td><img src="xcompany.jpg" width="120px" height="70px"  align ="left">
                <p align = "right"><a href="index.php">Home |</a>
                <a href="logout.php" >Logout</a> </p>
            </td>
         </tr>
         <tr>
            <td> Account <hr> <br>            
            <ul>           
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="viewProfile.php">View Profle</a></li>
            <li><a href="editProfile.php">Edit Profile</a></li>
            <li><a href="changeProfilePic.php">Change Profile Picture</a></li>
            <li><a href="changePassword.php">Change Password</a></li>
            </ul>
         
        </td>
        <td colspan="2">
            Welcome <?php echo "$_COOKIE[User]" ?>
        </td>
       </tr>
         <tr>
            <td colspan="2" height="10px" align="center">Copyright © 2023</td>
         </tr> 
        </table>
    
</body>
</html>
