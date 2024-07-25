<?php

require_once "utils.php";

spl_autoload_register(function ($class) {
  include "../class/$class.php";
});

$router = new Router();

$router->get("/", [Controller::class, 'getIndex']);
$router->get("/login", [Controller::class, 'getLogin']);
$router->get("/signup", [Controller::class, 'getSignup']);

$router->resolve();
