<?php

class Validator
{
  public static function validateEmail($email)
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  public static function validatePassword($password)
  {
    return strlen($password) >= 8;
  }

  public static function validateUsername($username)
  {
    return preg_match('/^[a-zA-Z0-9_]+$/', $username) && strlen($username) >= 3;
  }

  public static function validateName($name)
  {
    return preg_match('/^[a-zA-Z ]+$/', $name) && strlen($name) >= 3;
  }
}