<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  abort(405);
}

$errors = [];

if (!Validator::string($_POST['title'], 1, 254)) {
  $errors['title'] = 'Post title cannot be less than 1 character or greater than 254.';
} elseif (!Validator::string($_POST['body'], 6, 200)) {
  $errors['body'] = 'Post content cannot be less than 6 character or greater than 2000.';
}

if (!empty($errors)) {
  header('location: /posts/create');
  die();
}

$config = require('../config.php');
$pdo = new Database($config['DB']);

$posts = $pdo->query(
  'INSERT INTO posts(title, body, user_id) VALUES (:title, :body, :user_id)',
  [
    'user_id' => 1,
    'title' => $_POST['title'],
    'body' => $_POST['body'],
  ]
);

header('location: /posts');
