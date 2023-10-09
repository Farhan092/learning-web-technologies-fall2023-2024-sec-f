<?php
  if(isset($_POST['user']))
  {

    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    echo "Date is : $date,$month,$year";
   
  }
?>

<html lang="en">
<head>
    <title>HTML Date of Birth Form</title>
</head>
<body >

    <form method =" post " action="" enctype="">
        <fieldset>
          <legend>Date of Birth</legend>
              dd     mm    yyyy  <br/>
          <input type="text" name="date" value="" size= 1 /> / <input type="text" name="month" value="" size= 1 /> / <input type="text" name="year" value="" size= 1 /> <br/> <hr> 
          <input type="submit" name="user" value="submit" />  

        </fieldset>

    </form>
    
</body>
</html>