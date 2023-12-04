<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration</title>
    <script src="../js/email.js"></script>
</head>
<body>
    <form method="post" action="../controller/registerCheck.php">
        <fieldset>
            <legend><h3>User Registration</h3></legend>

            
            <p style="color: red;"><?php session_start(); echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?></p>

            <b>Name :</b><br>
            <input type="text" name="name" value="" /> <br><br>
            <b>Phone :</b><br>
            <input type="number" name="phone" value="" /> <br><br>
            <b>Email :</b><br>
            <input type="email" id="email" name="email" value="" onblur="emailAjax()" /> 
            <span id="result" style="color: red;"></span><br><br>
            <b>Password :</b><br>
            <input type="password" name="password" value="" /> <br><br>
            <b>Confirm password :</b><br>
            <input type="password" name="confirmPassword" value="" /> <br><br>
            
            <input type="submit" name="submit" value="Register" /><br><br>
            <a href="login.php">Login</a>
        </fieldset>
    </form>
</body>
</html>
