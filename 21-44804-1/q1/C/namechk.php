<?php 
$Name ='';
if(isset($_POST['user']))
{
    $name = $_POST['username'];
}
?>

<html lang="en">
<head>
    <title>HTML Name Form</title>
</head>
<body>
    <form method ="post" action="" enctype="">
        <fieldset>
            Name: <br/> <input type="text" name="username" value="<?php echo $name ?>"> <br/>
            <input type="submit" name="user" value="Submit">
        </fieldset>
    </form>
    
</body>
</html>