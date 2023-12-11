<html>
<head>
    <title>Signup Page</title>
</head>
<body>
    <form method="post" name ="signupForm" action="../controller/signupCheck.php" >
        <fieldset>
            <legend><h3>Signup</h3></legend>

            Name:
            <input type="text" name="name" value="" /> <br><br>
            Username <br>
            <input type="text" name="username" value="" /> <br><br>
            Email <br>
            <input type="email" name="email" value="" /> <br><br>

            Password <br>
            <input type="password" name="password" value="" /> <br><br>

            Usertype : <br>
                <input type="radio" name="userType" value="buyer" /> Buyer
                <input type="radio" name="userType" value="seller" /> Seller             
             <br><br>
            
            <input type="submit" name="submit" value="Signup" />
            <a href="login.php">login</a>
        </fieldset>
    </form>
</body>
</html>