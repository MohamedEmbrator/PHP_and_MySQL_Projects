<?php
  
  function check_request_method($method) {
    if ($_SERVER["REQUEST_METHOD"] === $method) {
      return true;
    }
    return false;
  }

  function check_post_input($input) {
    if (isset($_POST[$input])) {
      return true;
    }
    return false;
  }

  function santize_input($input) {
    return trim(htmlspecialchars(htmlentities($input)));
  }