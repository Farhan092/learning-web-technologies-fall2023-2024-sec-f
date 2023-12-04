<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>
    <form action="../controller/loginCheck.php" method="post">
        <fieldset>
            <legend>Login Information</legend>
            Email:<br>
            <input type="email" id="email" name="email" ><br>
            Password:<br>
            <input type="password" id="password" name="password" ><br>
        </fieldset>
        <br>
        <input type="submit" value="Login">
    </form>
    <br>
    <a href="../view/register.php">Register here</a>
</body>
</html>
