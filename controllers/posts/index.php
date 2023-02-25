<?php

$config = require('../config.php');
$pdo = new Database($config['DB']);

$posts = $pdo->query(
  'SELECT * FROM posts WHERE user_id = :id',
  [':id' => 1]
)->all();

view('posts/index.view.php',[
  'posts' => $posts,
  'titles' => 'My Posts',
  'heading' => 'My Posts',
]);
