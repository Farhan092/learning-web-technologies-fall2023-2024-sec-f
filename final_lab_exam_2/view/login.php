<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="../controller/loginCheck.php" >
        <fieldset>
            <legend><h2>Login</h2></legend>

            Username <br>
            <input type="text" name="username" value="" /> <br><br>
            Password <br>
            <input type="password" name="password" value="" /> <br><br>
            
            
            <input type="submit" name="submit" value="Login" /><br><br>
            <a href="signup.php">Signup</a>
        </fieldset>
    </form>
</body>
</html>