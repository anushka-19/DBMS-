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
    $deptid = $_POST['deptid'];
    $deptname = $_POST['deptname'];
    $noofemp = $_POST['noofemp'];
    $sql = "INSERT INTO department (deptid, deptname, noofemp) 
    VALUES ('$deptid', '$deptname', '$noofemp')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("refresh:2; url=menu1.php");
}
?>