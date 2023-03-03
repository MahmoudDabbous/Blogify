<?php

$routes = [
  '/' => base_path() . 'controllers/home.php',
  '/about' => base_path() . 'controllers/about.php',
  '/contact' => base_path() . 'controllers/contact.php',
  
  '/posts' => base_path() . 'controllers/posts/index.php',
  '/post' => base_path() . 'controllers/posts/show.php',
  '/posts/create' => base_path() . 'controllers/posts/create.php',
  '/posts/store' => base_path() . 'controllers/posts/store.php',
];

mapRoute($_SERVER['REQUEST_URI'], $routes);
