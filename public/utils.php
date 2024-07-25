<?php

// dump and die
function dd( $value ) {
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die();
}

function extractName($fullName) {
  $fullName = trim($fullName);
  $nameParts = explode(' ', $fullName);

  if (count($nameParts) < 2) {
      return [
          'firstName' => $fullName, 
          'lastName' => ''          
      ];
  }

  $lastName = array_pop($nameParts); 
  $firstName = implode(' ', $nameParts);  
  return [
      'firstName' => $firstName,
      'lastName' => $lastName
  ];
}

function generateRandomPassword($length = 12) {
  // Define the characters to be used in the password
  $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $lowercase = 'abcdefghijklmnopqrstuvwxyz';
  $digits = '0123456789';
  $specialChars = '!@#$%^&*()_+-=[]{}|;:,.<>?';

  // Combine all characters into one string
  $allChars = $uppercase . $lowercase . $digits . $specialChars;

  // Shuffle the characters and pick a random password
  $password = '';
  $allCharsLength = strlen($allChars);
  
  // Ensure the password contains at least one character from each category
  $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
  $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
  $password .= $digits[rand(0, strlen($digits) - 1)];
  $password .= $specialChars[rand(0, strlen($specialChars) - 1)];

  // Fill the remaining length of the password with random characters
  for ($i = 4; $i < $length; $i++) {
      $password .= $allChars[rand(0, $allCharsLength - 1)];
  }

  // Shuffle the password to ensure randomness
  $password = str_shuffle($password);

  return $password;
}

function indexToMonth($index) {
  $months = [
    'January', 'February', 'March', 'April', 'May', 'June', 
    'July', 'August', 'September', 'October', 'November', 'December'
  ];
  return $months[$index];
}