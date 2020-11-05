<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-color:white;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(41, 79, 129);
  overflow-x: hidden;
  padding-top: 20px;
  border-color: white;
}

.sidenav a {
  padding: 16px 6px 6px 46px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  display: block;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  
}
hr{
    color:white;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  text-align: center;
  
}
.main1{
    
    margin-left: 200px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="first.php">Home</a><br>
  <a href="about.php">About Us</a><br>
  <a href="login.php">Login</a><br>
  <a href="#">Contact Us</a>
</div>

<div class="main">
  <h2>Payroll Management System</h2>
  
  <img src="finance2.jpg" width="100%" height="300px">
  
</div>
<div class="main1">
    <h4>About Payroll Management System</h4><hr>
    
  <p>
  Payroll management system is an operation that controls and manages the oversight of a company’s employees. It cares, monitors and accounts for the expenditure of a company over it’s employees.
Payroll management is the management of every employee’s salary, deductions, taxes and so on. It is an integral part of every company’s management system and one of their most important assets.  
</p>
  </div>
   
</body>
</html> 
