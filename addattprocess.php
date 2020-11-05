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
    $attid = $_POST['attid'];
    $date= $_POST['date'];
    $firsthalf = $_POST['firsthalf'];
    $secondhalf = $_POST['secondhalf'];
    $empid = $_POST['empid'];
    $sql = "INSERT INTO attendance (attid, date, firsthalf, secondhalf, empid) 
    VALUES ('$attid', '$date', '$firsthalf', '$secondhalf', '$empid')";
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