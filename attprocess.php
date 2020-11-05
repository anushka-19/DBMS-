<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
$db = mysqli_select_db($conn, "test");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['save'])){
    $empid = $_POST['empid'];
    $date = $_POST['date'];
$sql = "SELECT * FROM attendance WHERE empid='$empid' AND date='$date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Attendance ID:" . $row["attid"] . "<br><hr> Firsthalf     :" . $row["firsthalf"] . "<br><hr> Secondhalf:" . $row["secondhalf"] . "</td></tr>";
  }
  echo"</table>";
} else {
  echo "0 results";
}
$conn->close();
}
?>