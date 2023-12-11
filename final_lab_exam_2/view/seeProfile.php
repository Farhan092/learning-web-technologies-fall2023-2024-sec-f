<?php
    require_once('../model/uModel.php');
    $username=$_SESSION['username'];
    $users=seeProfile($username);
?>
<fieldset>
    <legend>Profile</legend>
    <?php for($i=0;$i<count($users);$i++)
    {?>

    Name: 
    <input type="text" name="name" value="<?=$users[$i]['name']?>" /> <br><br>
    Username:
    <input type="text" name="username" value="<?=$users[$i]['username']?>" /> <br><br>
    Email: 
    <input type="email" name="email" value="<?=$users[$i]['email']?>" /> <br><br>

    <?php }?>
</fieldset>