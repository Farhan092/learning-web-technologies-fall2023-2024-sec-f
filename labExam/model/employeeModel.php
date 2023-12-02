<?php 

require_once("./db_model.php");

function getAllEmployee($username)
{
    $con = getConnection();
    $sql = "select * from employee where username = $username";
    $result = mysqli_query($con, $sql);
    $employee = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($employee, $row);

    }
    return $employee;
}

function createEmployee($name, $contactno, $username, $password)
{

    $con = getConnection(); 
 
    $sql = " insert into employee values ( '{$name}','{$contactno}','{$username}','{$password}')";
    $result = mysqli_query($con, $sql);


    if ($result == true) {

        return true;
        
    } else {
        echo "User can not be created";
        return false;
    }
}

function UpdateEmployee($name, $contactno, $username, $password)
{

    $con = getConnection();  
       
    $sql = " update admin set Name = '{name}', Contact Number = '{$contactno}', password = '{$password}' where User name = '{$username}';";
        $upresult = mysqli_query($con, $sql);


    if ($upresult == true) {

        return true;
        
    } else {
        echo "User can not updated";
        return false;
    }
}

function deleteEmployee($username)
{
    $con = getConnection();
    $sql = " Delete from employee where username = '{$username}';";
    $result = mysqli_query($con, $sql);

    if ($result == true) {
      
        return true;   

    } else {
        echo "User can not be deleted";

        return false;
    }
}
function searchEmployee($username)
{
    $con = getConnection();

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = $_POST['query'];

$sql = "SELECT * FROM userinfo WHERE name LIKE '%$query%'";
$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>' . $row['name'] . '</p>';
    }
} else {
    echo '<p>No results found</p>';
}
mysqli_close($con);
}

function signup($name, $email, $userName, $password, $phone, $dob, $role)
    {
        $con = getConnection();
    
        $sql = "INSERT INTO userinfo (Name, Email, UserName, Password, Phone, DOB, Role)
                VALUES ('$name', '$email', '$userName', '$password', '$phone', '$dob', '$role')";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

?>