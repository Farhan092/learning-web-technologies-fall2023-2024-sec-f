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
            <option value="A+"<?php if($group=='A+') echo 'selected' ?>>A+</option>
            <option value="B+"<?php if($group=='B+') echo 'selected' ?>>B+</option>
            <option value="O+" <?php if($group=='O+') echo 'selected' ?>>O+</option>
            <option value="AB+"<?php if($group=='AB+') echo 'selected' ?>>AB+</option>
            <option value="AB-"<?php if($group=='AB-') echo 'selected' ?>>AB-</option>
        </select> <br>
         
          <hr>

        </fieldset>
        <br/>
        <input type="submit" name="user" value="submit" />  

    </form>
    
</body>
</html>
