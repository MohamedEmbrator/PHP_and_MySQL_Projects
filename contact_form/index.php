<?php

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach($_POST as $key => $value) {
      $$key = trim(htmlspecialchars(htmlentities($value)));
    }

    $errors = [];
    if (strlen($username) < 3) {
      $errors[] = "Name Must Be Greater Than <b>3</b> Chars";
    }
    if (strlen($message) < 10) {
      $errors[] = "Message Must Be Greater Than <b>10</b> Chars";
    }
    $headers = "From: $email \r\n";
    if (empty($errors)) {

      mail("embrator233@gmail.com", "Contact Form", $message, $headers);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #f1f1f1;">
  <div class="container">
    <h1 class="text-center mb-5 mt-5 me-auto ms-auto">Contact</h1>
    <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="POST">
        <?php  
        if (isset($errors) && !empty($errors)) {
          foreach($errors as $error) {
        ?>
        <div class="alert alert-danger"><?php  echo $error; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        
        <?php } }  ?>
        <input type="text" name="username" class="form-control mb-2" placeholder="Your Name" value="<?php if (isset($username) && !empty($errors)) { echo $username; }?>">
        <input type="email" name="email" class="form-control mb-2" placeholder="Your Email" value="<?php if (isset($email) && !empty($errors)) { echo $email; }?>">
        <input type="tel" name="phone_number" class="form-control mb-2" placeholder="Your Phone Number" value="<?php if (isset($phone_number) && !empty($errors)) { echo $phone_number; }?>">
        <textarea name="message" class="form-control mb-2" placeholder="Your Message">
          <?php if (isset($message) && !empty($errors)) { echo $message; }?>
        </textarea>
        <input type="submit" value="Send Message" class="btn btn-primary w-100">
      </form>
    <div class="mb-3">
  <script src="js/bootstrap.bundle.min.js"></script>
  </div>
</body>
</html>