<?php

$servername='localhost';
$username='root';
$password='';
$dbname='test';
$conn=mysqli_connect($servername,$username,$password);
$db = mysqli_select_db($conn, "test");
if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['save']))
{
    $empid = $_POST['empid'];
    $empname = $_POST['empname'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $deptid = $_POST['deptid'];
    $designation = $_POST['designation'];
    $bankacc = $_POST['bankacc'];
    $panno = $_POST['panno'];
    $sql = "INSERT INTO employees (empid, empname, age, dob, deptid, designation, bankacc, panno) VALUES ('$empid', '$empname', '$age', '$dob', '$deptid', '$designation', '$bankacc', '$panno')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>