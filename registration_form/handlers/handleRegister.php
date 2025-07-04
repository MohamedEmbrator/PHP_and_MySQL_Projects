<?php
  session_start();
  include("../core/validations.php");
  $errors = [];

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach($_POST as $key => $value) {
      $$key = validate_value($value);
    }
    if (required_input($user_name)) {
      $errors[] = "Name is Required";
    } elseif (min_input($user_name, 3)) {
      $errors[] = "Name Must Be Greater Than 3 Chars";
    } elseif (max_input($user_name, 20)) {
      $errors[] = "Name Must Be Smaller Than 20 Chars";
    }

    if (required_input($password)) {
      $errors[] = "Password is Required";
    } elseif (min_input($password, 8)) {
      $errors[] = "Password Must Be Greater Than 8 Chars Or Letters";
    }
    if (!($confirm_password === $password)) {
      $errors[] = "Confirm Password Must Be Equal To Password";
    }
    if (required_input($email)) {
      $errors[] = "Email is Required";
    } elseif (!validate_email($email)) {
      $errors[] = "Please Type a Valid Email";
    }
  } else {
    header("Location: ../");
    exit();
  }

  if (!empty($errors)) {
    $_SESSION["errors"] = $errors;
    header("Location: ../");
    exit();
  } else {
    unset($_SESSION["errors"]);
    $_SESSION["user"] = [
      "name" => $user_name,
      "email" => $email
    ];
    header("Location: ../profile.php");
  }