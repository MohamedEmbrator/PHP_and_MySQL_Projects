<?php
session_start();





?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form Using PHP</title>
  <style>
    body {
      background-color: #eee;
      font-family: Arial, sans-serif;
    }
    form {
      width: 600px;
      margin: 100px auto;
      padding: 20px;
      border-radius: 15px;
      background-color: #fff;
      box-shadow: 1px 1px 10px #ccc;
    }
    form input {
      display: block;
      padding: 5px 10px;
      border: 1px solid #ddd;
      outline: none;
      width: 90%;
      height: 50px;
      font-size: 18px;
      margin: 10px auto;
      border-radius: 5px;
    }
    form input:last-child {
      background-color: #009688;
      text-align: center;
      color: #fff;
      margin: 20px auto;
    }
    .error {
      margin: 10px auto;
      padding: 10px 20px;
      background-color: #ff000063;
      text-align: center;
    }
  </style>
</head>
<body>
  <form action="handlers/handleRegister.php" method="POST">
    <?php if(isset($_SESSION['errors'])) {
      foreach ($_SESSION["errors"] as $error) :
    ?>

        <div class="error"><?php echo $error;?></div>
    <?php endforeach;  }
    if (isset($_SESSION["errors"])) {unset($_SESSION["errors"]);}?>
    <input type="text" name="user_name" placeholder="Username">
    <input type="email" name="email" placeholder="Email" >
    <input type="password" name="password" placeholder="Password" >
    <input type="password" name="confirm_password" placeholder="Confirm Password" >
    <input type="submit" value="Register" style="cursor: pointer;">
  </form>
</body>
</html>