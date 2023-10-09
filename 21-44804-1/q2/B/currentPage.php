<?php
  if(isset($_POST['user']))
  {

    $EmailTrack = $_POST['mailer'];
    echo "Your email is $EmailTrack ";
   
  }
?>

<html lang="en">
<head>
    <title>HTML Email Form</title>
</head>
<body>

    <form method = "post" action="" enctype="">
        <fieldset>
            Email:<br/> <input type="text" name="mailer" value=""> <input type="button" name="" value ="i" >
            <br/>
            <input type="submit" name="user" value="Submit">           
     </fieldset>
    </form>
    
</body>
</html>