<?php

class User 
{
  protected static PDO $pdo;
  public function __construct(PDO $pdo)
  {
    User::$pdo = $pdo;
  }

  public static function findAll()
  {
    $statement = User::$pdo->prepare('select * from users');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function findByEmail($email)
  {
    $statement = User::$pdo->prepare('select * from users where email = :email');
    $statement->bindParam(':email', $email);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
  }

  public static function findById($id)
  {
    $statement = User::$pdo->prepare('select * from users where id = :id');
    $statement->bindParam(':id', $id);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
  }

  public static function findByUsername($username)
  {
    $statement = User::$pdo->prepare('select * from users where username = :username');
    $statement->bindParam(':username', $username);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
  }

  public static function create($username, $name, $email, $password)
  {
    extract(extractName($name)); // $firstName, $lastName
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $statement = User::$pdo->prepare('insert into users (firstname, lastname, email, username, password_hash) values (:firstname, :lastname, :email, :username, :password_hash)');
    $statement->bindParam(':firstname', $firstName);
    $statement->bindParam(':lastname', $lastName);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':username', $username);
    $statement->bindParam(':password_hash', $password_hash);
    $statement->execute();
    return User::findByEmail($email);
  }

  public static function resetPassword($email)
  {
    $newPassword = generateRandomPassword();
    $password_hash = password_hash($newPassword, PASSWORD_DEFAULT);
    $statement = User::$pdo->prepare('update users set password_hash = :password_hash where email = :email');
    $statement->bindParam(':password_hash', $password_hash);
    $statement->bindParam(':email', $email);
    $statement->execute();
    return $newPassword;
  }

  public static function update($email, $firstname, $lastname, $job_title, $profile_image, $phone, $address) {
    $statement = User::$pdo->prepare('update users set firstname = :firstname, lastname = :lastname, job_title = :job_title, profile_image = :profile_image, phone = :phone, address = :address where email = :email');
    $statement->bindParam(':firstname', $firstname);
    $statement->bindParam(':lastname', $lastname);
    $statement->bindParam(':job_title', $job_title);
    $statement->bindParam(':profile_image', $profile_image);
    $statement->bindParam(':phone', $phone);
    $statement->bindParam(':address', $address);
    $statement->bindParam(':email', $email);
    $statement->execute();
    return User::findByEmail($email);
  }
}