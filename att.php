<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="addemp.css">
    <title>Document</title>
</head>
<body>
<div class="rectangle">
        <form action="attprocess.php" method="post">
        <div class="container">
                <p style="text-align:center;"><b>View Attendance of Employee</b><br><br></p>
              <input type="text" placeholder="Employee ID" name="empid" id="empid">
              <input type="date" placeholder="Date" name="date" id="date">
              
              <br><br>
              <input type="submit" name="save" value="submit">
              <br><br>

          </form>
</body>
</html>