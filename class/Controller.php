<?php

class Controller
{
  public static function getIndex()
  {
    if (!Session::get("user")) {
      header("Location: /login");
    }
    include "../views/index.view.php";
  }

  public static function getLogin()
  { 
    if (Session::get("user")) {
      header("Location: /");
    }
    include "../views/login.view.php";
  }

  public static function getRecover()
  {
    if (Session::get("user")) {
      header("Location: /");
    }
    include "../views/recover.view.php";
  }


  public static function getSignup()
  {
    if (Session::get("user")) {
      header("Location: /");
    }
    include "../views/signup.view.php";
  }

  public static function  postSignup()
  {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    Session::flash('signupForm', [
      'email'=> $email,
      'username'=> $username,
      'name'=> $name
    ]);

    // valid email
    if (! Validator::validateEmail($email)) {
      Session::flashNoti("Invalid email. Try again.", "error");
      header("Location: /signup");
      exit();
    }

    // valid username
    if (! Validator::validateUsername($username)) {
      Session::flashNoti("Invalid username. Try again.", "error");
      header("Location: /signup");
      exit();
    }


    // valid name
    if (! Validator::validateName($name)) {
      Session::flashNoti("Invalid name. Try again.", "error");
      header("Location: /signup");
      exit();
    }

    // valid password
    if (! Validator::validatePassword($password)) {
      Session::flashNoti("Password length must be at least 8 characters.", "error");
      header("Location: /signup");
      exit();
    }

    // check if email already exists
    if (User::findByEmail($email)) {
      Session::flashNoti("Email already exists. Pick another one!", "error");
      header("Location: /signup");
      exit();
    }

    // check if username exists
    if (User::findByUsername($username)) {
      Session::flashNoti("Username already exists. Pick another one!", "error");
      header("Location: /signup");
      exit();
    }
    
    $newUser = User::create($username, $name, $email, $password);

    unset($newUser['password_hash']);
    Session::set("user", $newUser);

    Session::unFlash("signupForm");
    Session::flashNoti("Welcome to Base Account!", "info");

    session_regenerate_id(true);
    Session::generateCsrf();

    if (isset($_POST['keep-logged-in'])) {
      Cookie::createNewToken($newUser['id']);
    }

    header('Location: /');
  }

  public static function postLogin()
  { 
    $email = $_POST['email'];
    $password = $_POST['password'];

    Session::flash('loginForm', [
      'email'=> $email
    ]);

    // valid email
    if (! Validator::validateEmail($email)) {
      Session::flashNoti("Invalid email. Try again.", "error");
      header("Location: /login");
      exit();
    }

    // valid password
    if (! Validator::validatePassword($password)) {
      Session::flashNoti("Password length must be at least 8 characters.", "error");
      header("Location: /login");
      exit();
    }

    // check if user exists
    $userFound = User::findByEmail($email);
    
    // user not found in database
    if (! $userFound) {
      Session::flashNoti("Incorrect email or password. Please try again.", "error");
      header("Location: /login");
      exit();
    }
    
    // user found in database but password is incorrect
    if (! password_verify($password, $userFound['password_hash'])) {
      Session::flashNoti("Incorrect email or password. Please try again.", "error");
      header("Location: /login");
      exit();
    }

    Session::unFlash("loginForm");
    
    unset($userFound['password_hash']);
    Session::set("user", $userFound);

    session_regenerate_id(true);
    Session::generateCsrf();

    if (isset($_POST['keep-logged-in'])) {
      Cookie::createNewToken($userFound['id']);
    }

    // redirect to home page
    header("Location: /");
    exit();
  }

  public static function logout()
  {
    if (!$_POST['csrf_token'] or !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
      Session::flashNoti("Invalid CSRF token.", "error");
      header("Location: /");
      exit();
    }

    Session::destroy();
    header("Location: /login");
  }

  public static function postRecover()
  {
    $email = $_POST["email"];
    $captcha = $_POST['captcha'];

    Session::flash('recoverForm', [
      'email'=> $email
    ]);

    if (! Validator::validateEmail( $email )) {
      Session::flashNoti("Incorrect email address.", "error");
      header("Location: /recover");
      exit();
    }

    if ($captcha !== $_SESSION['captcha']) {
      Session::flashNoti("Incorrect captcha.", "error");
      header("Location: /recover");
      exit();
    }

    $userFound = User::findByEmail($email);
    if (! $userFound) {
      Session::flashNoti("An email has been sent to $email.", "info");
      header("Location: /recover");
      exit();
    }

    $newPassword = User::resetPassword($email);
    EmailSender::sendResetPassword($email, $newPassword);
    Session::unFlash("recoverForm");
    Session::flashNoti("An email has been sent to $email.", "info");
    header("Location: /login");
    exit();
  }

  public static function postEdit()
  {
    if (!$_POST['csrf_token'] or !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
      Session::flashNoti("Invalid CSRF token.", "error");
      header("Location: /");
      exit();
    }

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $job_title = $_POST['job_title'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $profile_image = Session::getUser()['profile_image'];
    $image = $_FILES["profile_image"];
    if ($image["tmp_name"]) {
      $profile_image = "profile_images/" . generateRandomPassword() . '_'. $image["name"];
      move_uploaded_file($image["tmp_name"], $profile_image);
    }

    $email = Session::getUser()['email'];
    $updatedUser = User::update($email, $firstname, $lastname, $job_title, $profile_image, $phone, $address);
    Session::flashNoti("Your information has been updated!", "info");
    Session::set('user', $updatedUser);
    header("Location: /");
    exit();
  }
}
