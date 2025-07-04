<?php session_start();
  if (!isset($_SESSION["user"])) {
    header("Location: .");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <style>
    body {
      background-color: #ccc;
      font-family: Arial, sans-serif;
    }
    .container {
      background-color: #fff;
      width: 500px;
      margin: 100px auto;
      box-shadow: 2px 2px 10px #ddd;
      border-radius: 15px;
      text-align: center;
      padding: 10px 20px;
    }
    h3, 
    h4 {
      text-align: left;
      font-size: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Profile</h1>
    <h3>Name : <?php echo $_SESSION["user"]["name"]?></h3>
    <h4>Email : <?php echo $_SESSION["user"]["email"]?></h4>
  </div>
</body>
</html>