<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    table{
        border-collapse: collapse;
        width:100%;
        font-family: monospace;
        font-size: 20px;
        text-align: center;
    }

    th{
        background-color: white;
        
    }
    tr:nth-child(even) {background-color:#1492E6}

    </style>
</head>
<body>
    <table>
        <tr>
            <th>Department Id</th>
            <th>Department Name</th>
            <th>Number of Employees</th>
</tr>
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

$sql = "SELECT * FROM department";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["deptid"] . "</td><td>" . $row["deptname"] . "</td><td>" . $row["noofemp"] . "</td></tr>";
  }
  echo"</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</table>

</body>
</html>


