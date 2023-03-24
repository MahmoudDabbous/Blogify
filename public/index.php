<?php

require __DIR__ . '/../src/helpers/include.php';

spl_autoload_register(function ($class) {
  $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
  require base_path() . $class . '.php';
});

$router = new \Src\Router();
require base_path() . 'routes.php';
$router->resolve(
  $_SERVER['REQUEST_URI'],
  $_POST['_METHOD'] ?? $_SERVER['REQUEST_METHOD']
);
