<?php

  $db = mysqli_connect("localhost", "root", "");
  if (!$db) {
    echo mysqli_connect_error($db);
  }

  $sql = "CREATE DATABASE IF NOT EXISTS to_do_app;";
  mysqli_query($db, $sql);

  mysqli_close($db);

  // Create Tables 
  $db = mysqli_connect("localhost", "root", "", "to_do_app");
  if (!$db) {
    echo mysqli_connect_error($db);
  }

  $sql = "CREATE TABLE IF NOT EXISTS tasks (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL
  )";
  mysqli_query($db, $sql);

  mysqli_close($db);

