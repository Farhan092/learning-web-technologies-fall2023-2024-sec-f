<?php
    if(isset($_POST['user'])){
        $bloodgroup = $_POST['blood'];
        echo "Your Blood group is {$bloodgroup}";
    }
?>

<html lang="en">
<head>
    <title>HTML Blood Group Form</title>
</head>
<body >

    <form method =" post " action="" enctype="">
        <fieldset>
          Blood Group <select name="blood"> 
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select> <br>
         
          <hr>
        
        </fieldset>
        <br/>
        <input type="submit" name="user" value="submit" />  

    </form>
    
</body>
</html>
