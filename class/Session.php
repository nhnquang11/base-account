<?php

class Session 
{
  public static function generateCsrf()
  {
    if (!isset($_SESSION['csrf_token'])) {
      $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
  }

  public static function get($key)
  {
    return $_SESSION[$key] ?? null;
  }

  public static function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public static function destroy() 
  {
    $params = session_get_cookie_params();
    Cookie::destroyRemeberMe();
    setcookie(session_name(), '', time() - 3600, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    session_unset(); // $_SESSION = [];
    session_destroy();
  }

  public static function getUser() {
    return $_SESSION["user"] ?? null;
  }

  public static function flash($key, $value)
  {
    $_SESSION["_flash"][$key] = $value;
  }

  public static function unFlash($key)
  {
    unset($_SESSION["_flash"][$key]);
  }

  public static function getFlash($key)
  {
    return $_SESSION["_flash"][$key] ?? null;
  }

  public static function flashNoti($message, $type)
  {
    $_SESSION["_flash"]["noti"] = [
      "message" => $message,
      "type" => $type
    ];
  }

  public static function unFlashNoti()
  {
    unset($_SESSION["_flash"]["noti"]);
  }

  public static function getFlashNoti()
  {
    return $_SESSION["_flash"]["noti"] ?? null;
  }

  public static function flashEditForm($form)
  {
    $_SESSION["_flash"]["editForm"] = $form;
  }

  public static function getFlashEditForm()
  {
    return $_SESSION["_flash"]["editForm"] ?? null;
  }
}
