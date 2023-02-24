<?php 

$title = 'Create a Post';
$heading = 'Create a Post';

$config = require('../config.php');
$pdo = new Database($config['DB']);

$posts = $pdo->query(
  'SELECT * FROM posts WHERE user_id = :id',
  [':id' => 1]
)->all();

require(base_path() . 'views/posts/create.view.php');
