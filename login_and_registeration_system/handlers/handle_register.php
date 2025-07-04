<?php
session_start();
  include("../core/functions.php");
  include("../core/validations.php");
  $errors = [];
  if (check_request_method("POST") && check_post_input("user_name")) {
    foreach($_POST as $key => $value) {
      $$key = santize_input($value);
      $_SESSION[$$key] = santize_input($value);
    }
    
    if (!required_val($user_name)) {
      $errors[] =  "Name Is Required";
    } elseif(!min_value($user_name, 3)) {
      $errors[] =  "Name Must Be Greater Than 3 Chars";
    } elseif (!max_value($user_name, 25)) {
      $errors[] =  "Name Must Be Smaller Than 25 Chars";
    }

    if (!required_val($email)) {
      $errors[] =  "Email Is Required";
    } elseif(!validate_email($email)) {
      $errors[] =  "Please Type a Valid Email";
    }
    if (!required_val($password)) {
      $errors[] =  "Password Is Required";
    } elseif(!min_value($password, 8)) {
      $errors[] =  "Password Must Be Greater Than 8 Chars";
    } elseif (!max_value($password, 25)) {
      $errors[] =  "Password Must Be Smaller Than 25 Chars";
    }

    if (empty($errors)) {
      $handle = fopen("../data/users.csv", "a+");
      $data = [$user_name, $email, sha1($password)];
      fputcsv($handle, $data);
      fclose($handle);
      $_SESSION["auth"] = [$user_name, $email];
      header("Location: ../");
      exit;
    } else {
      $_SESSION["errors"] = $errors;
      header("Location: ../register.php");
      exit;
    }

  } else {
    header("Location: ../register.php");
    exit();
  }