<?php

$routes = require_once base_path() . 'routes.php';
mapRoute($_SERVER['REQUEST_URI'], $routes);