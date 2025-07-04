<?php

  function required_input($input) {
    if (empty($input)) {
      return true;
    }
    return false;
  }

  function min_input($input, $length) {
    if (strlen($input) < $length) {
      return true;
    }
    return false;
  }
  function max_input($input, $length) {
    if (strlen($input) > $length) {
      return true;
    }
    return false;
  }

  function validate_email($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    }
    return false;
  }

  function validate_value($value) {
    return trim(htmlentities(htmlspecialchars($value)));
  }