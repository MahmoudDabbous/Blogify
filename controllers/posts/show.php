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

  $posts = $pdo->query(
    'DELETE FROM posts WHERE id = :id',
    [':id' => $_POST['id']]
  );

  redirect('/posts');
}

$post = $pdo->query(
  'SELECT * FROM posts WHERE id = :id',
  [':id' => $_GET['id']]
)->findOrFail();

authorize($post['user_id'] === 1);

$title = trim(htmlspecialchars($post['title']));
$heading = trim(htmlspecialchars($post['title']));

view('posts/show.view.php', [
  'post' => $post,
  'heading' => $heading,
  'title' => $title,
]);
