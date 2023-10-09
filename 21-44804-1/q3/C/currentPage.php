<?php
  if(isset($_POST['user']))
  {

    $date = $_POST['date'];
    $momth = $_POST['month'];
    $year = $_POST['year'];
    echo "Date is : $date,$maonth,$year";
   
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
          <input type="text" name="date" value="<?php echo $date ?>" size= 1 /> / <input type="text" name="month" value="<?php echo $month ?>" size= 1 /> / <input type="text" name="year" value="<?php echo $year ?>" size= 1 /> <br/> <hr> 
          <input type="submit" name="user" value="submit" />  
          
        </fieldset>

    </form>
    
</body>
</html>