<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';


// Create connection
$conn = mysqli_connect($servername, $username, $password);
$db = mysqli_select_db($conn, "test");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
if(isset($_POST['save'])){
    $empid = $_POST['empid'];
    $sql = "DELETE FROM employees WHERE empid='$empid'";

    if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    header("refresh:2; url=menu1.php");
}

?>