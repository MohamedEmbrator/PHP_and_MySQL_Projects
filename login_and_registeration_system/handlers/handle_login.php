<?php
  session_start();
  $errors = [];
  include("../core/functions.php");
  include("../core/validations.php");
  if (check_request_method("POST")) {
    $data_arrays = explode("\n",file_get_contents("../data/users.csv"));
    array_pop($data_arrays);
    foreach ($data_arrays as $array) {
      $data = explode(",", $array);
      echo $data[1] . "<br>";
    if ($_POST["email"] === $data[1] && sha1($_POST["password"]) === $data[2]) {
      $_SESSION["auth"] = [$data[0] ,$data[1]];
      header("Location: ../");
      exit;
    } else {
      $errors[] = "Email or Password is incorrect";
      $_SESSION["errors"] = $errors;
      header("Location: ../login.php");
      exit;
    }
  }
}