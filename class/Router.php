<?php

class Router
{
  protected array $routes = [];

  public function get($path, $controller)
  {
    $this->routes['get'][$path] = $controller;
  }

  public function post($path, $controller)
  {
    $this->routes['post'][$path] = $controller;
  }

  public function getMethod()
  {
    return strtolower($_SERVER['REQUEST_METHOD']);
  }

  public function getPath()
  {
    $path = $_SERVER['REQUEST_URI'];
    $position = strpos($path, '?');
    if ($position === false) {
      return $path;
    }
    return substr($path, 0, $position);
  }

  public function resolve()
  { 
    $method = $this->getMethod();
    $path = $this->getPath();

    $this->routes[$method][$path]();
  }
}