<?php

class Cookie 
{
  protected static PDO $pdo;
  public function __construct(PDO $pdo)
  {
    Cookie::$pdo = $pdo;
  }

  public static function createNewToken($user_id) {
    $token = generateRandomPassword(32);
    Cookie::create($user_id, $token, time() + 60 * 60 * 24 * 7);
  }

  public static function create($user_id, $token, $expires_at)
  {
    $expires_at_dstr = date('Y-m-d H:i:s', $expires_at);
    $statement = Cookie::$pdo->prepare('insert into cookies (user_id, token, expires_at) values (:user_id, :token, :expires_at)');
    $statement->bindParam(':user_id', $user_id);
    $statement->bindParam(':token', $token);
    $statement->bindParam(':expires_at', $expires_at_dstr);
    $statement->execute();
    setcookie('rememberme', $token, $expires_at,'/');
  }

  public static function getUser($token)
  {
    $statement = Cookie::$pdo->prepare('select * from cookies where token = :token');
    $statement->bindParam(':token', $token);
    $statement->execute();
    $user_id = $statement->fetch(PDO::FETCH_ASSOC)['user_id'];

    return User::findById( $user_id );
  }

  public static function checkRememberMe()
  {
    if (isset($_COOKIE['rememberme']) && !isset($_SESSION['user'])) {
      $token = $_COOKIE['rememberme'];
      $user = Cookie::getUser($token);
      Session::set("user", $user);
    }
  }

  public static function destroyRemeberMe()
  {
    if (isset($_COOKIE['rememberme'])) {
      $token = $_COOKIE['rememberme'];
      $statement = Cookie::$pdo->prepare('delete from cookies where token = :token');
      $statement->bindParam(':token', $token);
      $statement->execute();
      setcookie('rememberme', '', time() - 3600, '/');
    }
  }
}
