<?php

use Src\Database;

$config = require('../config.php');
$pdo = new Database($config['DB']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $post = $pdo->query(
    'SELECT * FROM posts WHERE id = :id',
    [':id' => $_POST['id']]
  )->findOrFail();

  authorize($post['user_id'] === 1);

  $pdo->query(
    'DELETE FROM posts WHERE id = :id',
    [':id' => $_POST['id']]
  );

  redirect('/posts');
}

$posts = $pdo->query(
  'SELECT * FROM posts WHERE user_id = :id',
  [':id' => 1]
)->all();

view('posts/index.view.php', [
  'posts' => $posts,
  'titles' => 'My Posts',
  'heading' => 'My Posts',
]);
