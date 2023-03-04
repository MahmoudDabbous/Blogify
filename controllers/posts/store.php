<?php

use Src\Database;
use Src\Validator;

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
  redirect('posts/create', [
    'errors' => $errors,
    'title' => 'Create a Post',
    'heading' => 'Create a Post'
  ]);
}

$config = require('../config.php');
$pdo = new Database($config['DB']);

$pdo->query(
  'INSERT INTO posts(title, body, user_id) VALUES (:title, :body, :user_id)',
  [
    'user_id' => 1,
    'title' => $_POST['title'],
    'body' => $_POST['body'],
  ]
);

redirect('/posts');
