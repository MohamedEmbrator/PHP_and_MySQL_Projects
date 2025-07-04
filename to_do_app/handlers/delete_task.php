<?php
  session_start();
  if (isset($_GET["id"])) {
  
  $db = mysqli_connect("localhost", "root", "", "to_do_app");
  if (!$db) {
    $_SESSION["errors"] = "Connection Error : " . mysqli_connect_error();
  }
  $id = $_GET["id"];

  $sql = "SELECT * FROM `tasks` WHERE id = '$id';";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_row($result);

  if ($row == NULL) {
    $_SESSION["errors"] = "Data Not Exist";
    header("Location: ../");
    exit;
  } else {
    $sql = "DELETE FROM `tasks` WHERE id = '$id';";
    $result = mysqli_query($db, $sql);
    $_SESSION["success"] = "Task Deleted Successfuly";
  }

    header("Location: ../");
    exit;
  }