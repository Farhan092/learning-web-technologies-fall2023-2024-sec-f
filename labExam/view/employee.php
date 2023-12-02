<?php
require_once "../model/employeeModel.php";
require_once "../controller/employeeCheck.php";

$nameError = $userNameError = $passwordError = $phoneError = $successMessage = "";

$name = $userName = $password = $phone;


if (isset($_POST["submit"])) {
    $postData = [
        "name" => $_POST["name"],
        "username" => $_POST["username"],
        "password" => $_POST["password"], 
        "phone" => $_POST["phone"],
        
    ];

    $validationErrors = validateSignup($postData);

    $nameError = $validationErrors["name"] ?? "";
    $userNameError = $validationErrors["username"] ?? "";
    $passwordError = $validationErrors["password"] ?? "";
    $phoneError = $validationErrors["phone"] ?? "";

    if (empty($nameError)&& empty($userNameError) && empty($passwordError) && empty($phoneError)) {
        

        $signupResult = signup($postData["name"], $postData["username"], $postData["password"], $postData["phone"]);

        if ($signupResult) {
            $successMessage = "Registration successful!";
        } else {
            $successMessage = "Registration failed. Please try again.";
        }
    }
}
?>

<html lang="en">
<head>
    <title>Registration</title>
    <script src="../js/signupCheck.js"></script>

</head>
<body>

    <form id="signupForm" onsubmit="return validatSignup()" method="post" action="">
        <fieldset>
            <legend>Registration</legend>

            <div>
                <b>Name:</b><br> <input type="text" name="name"id ="name" value="">
                <span id="nameError" style="color: red;"></span><br>
               <?php echo $nameError; ?></div>
            </div>


            <div>
                <b>Username:</b> <br><input type="text" name="username" id ="username"value="">
                <span id="usernameError" style="color: red;"></span><br>
                <?php echo $userNameError; ?></div>
            </div>

            <div>
                <b>Password:</b><br> <input type="password" name="password" id ="password" value="">
                <span id="passwordError" style="color: red;"></span><br>
                <?php echo $passwordError; ?></div>
            </div>



            <div>
                <b>Phone:</b><br> <input type="number" name="phone" id  = "phone"  value="">
                <span id="phoneError" style="color: red;"></span><br>
                <?php echo $phoneError; ?></div>
            </div>



            <br>

            <div>
                <input type="submit" name="submit" value="Submit">
            </div>

            <div>
                <?php echo $successMessage; ?>
            </div>


            <a href="../view/login.php">Login</a>
        </fieldset>
    </form>
</body>
</html>