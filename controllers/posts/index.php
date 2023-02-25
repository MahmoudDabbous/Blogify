<?php

$title = 'My Posts';
$heading = 'My Posts';

$config = require('../config.php');
$pdo = new Database($config['DB']);

$posts = $pdo->query(
  'SELECT * FROM posts WHERE user_id = :id',
  [':id' => 1]
)->all();

require(base_path() . 'views/posts/index.view.php');
