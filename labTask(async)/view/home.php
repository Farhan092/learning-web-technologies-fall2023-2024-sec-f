<?php
    include_once('../controller/sessionCheck.php');


    $name=$_SESSION['user']['name'];
    $phone=$_SESSION['user']['phone'];
    $email=$_SESSION['user']['email'];
    
?>
<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <fieldset>

            <h2>Welcome !!!</h2>
            
                <h2>User Details</h2>
                <b>Name: 
                <?php echo $name; ?> <br>
                Phone:  
                <?php echo $phone; ?><br>
                Email ID:   
                <?php echo $email; ?></b><br>
            
            <a href="../controller/logout.php">Logout</a>

        </fieldset>
    </body>
</html>