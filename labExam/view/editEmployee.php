<?php
session_start();
require_once('../model/db.php');
require_once('../model/employeeModel.php');

?>

<html>
<head>
    <title>Edit Profile</title>
    <script src="../js/profileUpdateCheck.js"></script>
</head>
<body>
    <fieldset>
        <legend><h1><b>Edit Profile</b></h1></legend>
        <?php
        if (!empty($errors)) {
            echo '<div style="color: red;">';
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
            echo '</div>';
        }
        ?>
        <form method="post" action="" name="updateProfileForm" onsubmit="return validateProfileUpdate()">
            Name:<br>
            <input type="text" name="name" id="name" value="<?php echo isset($user['name']) ? $user['name'] : ''; ?>">
            <span id="nameError" style="color: red;"></span><br><br>

            Email:<br>
            <input type="text" name="email" id="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>">
            <span id="emailError" style="color: red;"></span><br><br>

            Phone:<br>
            <input type="text" name="phone" id="phone" value="<?php echo isset($user['phone']) ? $user['phone'] : ''; ?>">
            <span id="phoneError" style="color: red;"></span><br><br>



            <hr>

            <input type="submit" value="Submit">
        </form>
        <br>
        <a href="profile.php">Back to Profile</a>
    </fieldset>
</body>
</html>