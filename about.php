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
  text-align: left;
  
  
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
   <h2>Payroll Management System</h2><br>
   <p>This project is aimed at implementing an interactive and user-friendly database management system to facilitate the process of payment of salary to the employees working for companies in which users can input information of the employees along with their attendance and other required details. Users will have the option to “LOG IN” and the credentials will be stored in the database itself. Once logged in, the user will be able to create new details related to departments, employees, salaries and so on. They could also view the values already present in the database or they could update the values that already exist in the database according to their own will. Users will also be able to generate accurate payslips from the salary details available for each employee. Our project aims to provide ease of managing employee details and their payroll for large companies with several different departments, accurately and efficiently. 
     </p>
    
    
  </div>
   
</body>
</html> 