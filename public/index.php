<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once "utils.php";

session_start();

if (isset($_COOKIE['user']) && !isset($_SESSION['user'])) {
  $_SESSION['user'] = $_COOKIE['user'];
}

// prevent cross-site requests
setcookie('session', session_id(), [
  'samesite' => 'Strict',
  'secure' => true,
  'httponly' => true
]);

// Autoload classes
spl_autoload_register(function ($class) {
  include "../class/$class.php";
});

Session::generateCsrf();

// Database connection
$config = [
  "host" => "127.0.0.1",
  "port" => "3306",
  "dbname" => "myapp",
  "charset" => "utf8mb4"
];
$dsn = "mysql:".http_build_query($config, '', ';'); 
$pdo = new PDO($dsn, "root", ""); 

new User($pdo);
new Cookie($pdo);

Cookie::checkRememberMe();

$router = new Router();

$router->get("/", [Controller::class, 'getIndex']);
$router->get("/login", [Controller::class, 'getLogin']);
$router->get("/signup", [Controller::class, 'getSignup']);
$router->get("/recover", [Controller::class, 'getRecover']);

$router->post('/login', [Controller::class,'postLogin']);
$router->post('/signup', [Controller::class,'postSignup']);
$router->post("/recover", [Controller::class, 'postRecover']);
$router->post('/edit', [Controller::class,'postEdit']);
$router->post('/logout', [Controller::class,'logout']);

$router->get('/image', [Controller::class,'image']);
$router->post('/image', [Controller::class,'postImage']);

$router->resolve();
