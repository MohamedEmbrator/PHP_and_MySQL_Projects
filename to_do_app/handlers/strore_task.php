<?php
  session_start();
  $db = mysqli_connect("localhost", "root", "", "to_do_app");
  if (!$db) {
    echo "Connectin Error : " .  mysqli_connect_error();
  }

  if ($_SERVER["REQUEST_METHOD"] === "POST" && strlen($_POST["title"]) > 0) {
    $title = trim(htmlspecialchars(htmlentities($_POST["title"])));
    $sql = "INSERT INTO `tasks`(`title`) VALUES ('$title')";
    $result = mysqli_query($db, $sql);
    if (mysqli_affected_rows($db) === 1) {
      $_SESSION["success"] = "Data Inserted Successfuly";
    };
    header("Location: ../");
    exit;
  } else {
    header("Location: ../");
    exit();
  }