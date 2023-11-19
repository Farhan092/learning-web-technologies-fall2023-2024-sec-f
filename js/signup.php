<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>

    <form method="post">
        <fieldset>
            <legend>Registration</legend>

            <div>
               <b> Name:</b><br> <input type="text" name="name" id = "name"value=""><br>
            </div>

            <div>
                <b>Email:</b> <br><input type="email" name="email" value=""><br>
                
            </div> 

            <div>
                <b>Username:</b> <br><input type="text" name="username" value=""><br>
                
            </div>

            <div>
                <b>Password:</b><br> <input type="password" name="password" value=""><br>
                
            </div>

            <div>
                <b>Confirm Password:</b><br> <input type="password" name="confirmPassword" value="">
                
            </div>

            <div>
                <b>Phone:</b><br> <input type="number" name="phone" value=""><br>
                
            </div>

            <div>
                <b>DOB:</b><br> <input type="date" name="dob" value=""><br>
                
            </div>

            <div>
                <b>Role:</b> <br>
                <input type="radio" name="role" value="user"> User
                <input type="radio" name="role" value="admin"> Admin
                
            </div>
            <br>

            <div>
            <button type = "button" onclick="validate()">Submit</button>
            
            <h3 id="message"></h3>
            </div>
        </fieldset>
    </form>

    <script>
    function validate() {
        let name = document.getElementById('name').value;

        if (!name) {
            document.getElementById('message').innerHTML = "Name can not be empty";
            return;
        }

        if (!checkFirstChar(name[0])) {
            document.getElementById('message').innerHTML = "Name must start with a letter";
            return;
        }

        for (let i = 0; i < name.length; i++) {
            if (checkChar(name[i])) {}
            else {
                document.getElementById('message').innerHTML = "Name can only contain a-z or A-Z or dot or dash";
                return;
            }
        }

        let email = document.getElementsByName('email')[0].value;
        if (!email) {
            document.getElementById('message').innerHTML = "Email can not be empty";
            return;
        }

        if (!(email.includes('@') && email.includes('.'))) {
            document.getElementById('message').innerHTML = "Invalid email format";
            return;
        }

        let username = document.getElementsByName('username')[0].value;
        if (!username) {
            document.getElementById('message').innerHTML = "Username can not be empty";
            return;
        }

        for (let i = 0; i < username.length; i++) {
            if (isLetterOrDigit(username[i])) {}
            else {
                document.getElementById('message').innerHTML = "Username can only contain letters and numbers";
                return;
            }
        }

        let password = document.getElementsByName('password')[0].value;
        if (!password) {
            document.getElementById('message').innerHTML = "Password can not be empty";
            return;
        }

        if (isUpperCase(password[0]) && containsDigit(password) && containsSpecialChar(password)) {
            document.getElementById('message').innerHTML = "";
        } else {
            document.getElementById('message').innerHTML = "Invalid password format";
        }
    }

    function isLetterOrDigit(ch) {
        return (ch >= 'A' && ch <= 'Z') || (ch >= 'a' && ch <= 'z') || (ch >= '0' && ch <= '9');
    }

    function isUpperCase(ch) {
        return ch >= 'A' && ch <= 'Z';
    }

    function containsDigit(str) {
        for (let i = 0; i < str.length; i++) {
            if (str[i] >= '0' && str[i] <= '9') {
                return true;
            }
        }
        return false;
    }

    function containsSpecialChar(str) {
        let specialChars = ['@', '#', '$', '%', '^', '&', '*', '!'];
        for (let i = 0; i < str.length; i++) {
            if (specialChars.includes(str[i])) {
                return true;
            }
        }
        return false;
    }
</script>


    
</body>
</html>