<?php
  if(isset($_POST['user']))
  {
    $gen = $_POST['gender'];
    echo "Your Gender is $gen";
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
          <input type="radio" name="gender" value="Male" /> Male
          <input type="radio" name="gender" value="Female" /> Female
          <input type="radio" name="gender" value="Other" /> Other <br/>
        </fieldset>
       <br/> <input type="submit" name="user" value="Submit" /> 
    </form>
    
</body>
</html>
