<?php
$gen ="";
  if(isset($_POST['user']))
  {
    $gen = $_POST['gender'];
  
  }
 
?>

<<html lang="en">
<head>
    <title>HTML Gender Form</title>
</head>
<body>

    <form method ="post" action="" enctype="">
        <fieldset>
          <legend>Gender</legend>
          <input type="radio" name="gender" value="<?php if($gen == 'Male') echo 'checked = checked' ?>" /> Male
          <input type="radio" name="gender" value="<?php if($gen == 'Female') echo 'checked = checked' ?>" /> Female
          <input type="radio" name="gender" value="<?php if($gen == 'Other') echo 'checked = checked' ?>" /> Other <br/>
        </fieldset>
       <br/> <input type="submit" name="user" value="Submit" /> 
    </form>
    
</body>
</html>
