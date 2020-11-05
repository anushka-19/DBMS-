<?php
include("loginserv.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <style>
        body{
            background-color: #1492E6;
        }

        .login{
            width:360px;
            margin:50px auto;
            border-radius:10px;
            border:2px solid #ccc;
            padding:10px 40px 25px;
            margin-top:70px;
            background-color: White;
        }
        input[type=text], input[type=password]{
            width:99%;
            padding:10px;
            margin-top:8px;
            border:1px solid #ccc;
            padding-left:5px;
            font-size:16px;
        }
        .registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 15px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 430px;
    opacity: 0.9;
  }
  
  .registerbtn:hover {
    opacity: 1;
  }

  input[type=submit]{
    width:100%;
    background-color: blue;
    color:#FFFFFF;
    border: 2px solid #06f;
    padding: 10px;
    font-size: 20px;
    cursor: pointer;
    border-radius: 5px;
    margin-bottom: 15px;

  }

    </style>
</head>
<body>
    <div class="login">
        
            <h1 align="center">Login</h1>
            <form action="" method="post" style="text-align:center;">
              <input type="text" placeholder="Username" name="user" id="user"><br/><br/>
              <input type="password" placeholder="Password" name="pass" id="pass" required><br/><br/>
              <input type="submit" value="Login" name="submit">
          <span><?php echo $error; ?></span>
        
</div>
</body>
</html>