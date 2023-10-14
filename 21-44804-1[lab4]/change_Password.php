<?php 
    $currentPassword = $_REQUEST['currentPassword'];
    $newPassword = $_REQUEST['newPassword'];
    $retypedPassword = $_REQUEST['retypedPassword'];
    
    if ($newPassword == $currentPassword)
    {
        echo "New password can't be exactly same as current password !";
    }
    elseif ($newPassword != $retypedPassword)
    {
        echo "New password and retyped password doesn't match!";
    }
    else
    {
        echo "Password is changed successfully!!!";
    }
?>

