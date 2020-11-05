<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="adddept.css">
    <title>Document</title>
</head>
<body>
<div class="rectangle">
        <form action="deptprocess.php" method="post">
        <div class="container">
                <p style="text-align:center;"><b>Add New Department</b><br><br></p>
              <input type="text" placeholder="Department ID" name="deptid" id="deptid">
              
              <input type="state" placeholder="Department Name" name="deptname" id="deptname">
              <input type="number" placeholder="No. of employees" name="noofemp" id="noofemp">
              
              <br><br>
              <input type="submit" name="save" value="submit">
              <br><br>

          </form>
            
    
    
</body>
</html>