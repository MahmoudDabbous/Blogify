<?php 


$config = require('../config.php');
$pdo = new Database($config['DB']);

$post = $pdo->query(
  'SELECT * FROM posts WHERE id = :id',
  [':id' => $_GET['id']]
)->findOrFail();

authorize($post['user_id'] === 1);

$title = trim(htmlspecialchars($post['title']));
$heading = trim(htmlspecialchars($post['title']));

require(base_path() . 'views/posts/show.view.php');