<?php

  function required_val($input) {
    if (empty($input)) {
      return false;
    }
    return true;
  }

  function min_value($input, $length) {
    if (strlen($input) < $length) {
      return false;
    }
    return true;
  }

  function max_value($input, $length) {
    if (strlen($input) > $length) {
      return false;
    }
    return true;
  }

function validate_email($email) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  }
  return false;
}