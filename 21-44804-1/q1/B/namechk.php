<?php 
if(isset($_POST['user']))
{
    $MyName = $_POST['username'];
    echo "My name is $MyName";
}
?>
<html lang="en">
<head>
    <title>HTML Name Form</title>
</head>
<body>

    <form method ="post" action="" enctype="">
        <fieldset>
            Name:<br/> <input type="text" name="username" value=""> <br/>
            <input type="submit" name="user" value="Submit">
        </fieldset>
    </form>
    
</body>
</html>
