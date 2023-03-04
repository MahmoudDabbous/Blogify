<?php

function dd(mixed $value): void
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}

function authorize(bool $condition, int $code = 403): void
{
  if (!$condition) {
    abort($code);
  }
}

function view(string $path, array $attributes = []): void
{
  extract($attributes);
  require view_path() . $path;
  die();
}

function abort(int $code = 404): void
{
  http_response_code($code);
  view("errors/$code.view.php");
}

function redirect(string $path, array $attributes = [], int $code = 0): void
{
  if ($code !== 0) {
    http_response_code($code);
  }
  extract($attributes);
  header('location: ' . $path);
  die();
}
