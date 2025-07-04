<?php

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $db = mysqli_connect("localhost", "root", "", "to_do_app");
  if(!$db){
    $_SESSION['errors']=  "Connection Error : " . mysqli_connect_error();
  }
  $title = trim(htmlspecialchars(htmlentities($_POST['title'])));
  $id = $_GET["id"];
  if(strlen($title) < 3){
    $_SESSION['errors'] = "Title of Task must be greater than 3 chars "; 
  }
  if (empty($_SESSION["errors"])) {
    $sql = "UPDATE `tasks` SET `title` = '$title' WHERE `id` = '$id';";
    $result = mysqli_query($db, $sql);
    if($result){
        $_SESSION['success'] = "Data Updated Succefully";
    }
  }
  header("Location: ../");
  exit;
} else {
  header("Location: ../update.php?id=$id");
    exit;
  }