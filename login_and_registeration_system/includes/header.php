<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Project</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #eee;
      padding: 0;
      margin: 0;
    }
    a {
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      text-decoration: none;
    }
    header {
      background-color: #191919;
      color: #fff;
      width: 100%;
      max-width: 100%;
      padding: 10px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header nav ul {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      list-style: none;
    }
    h1 {
      text-align: center;
      margin: 20px auto;
    }
    form {
      width: 600px;
      margin: 50px auto;
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
      border-radius: 5px;
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
    .profile {
      text-align: left;
      font-size: 20px;
    }
  </style>
</head>
<body>