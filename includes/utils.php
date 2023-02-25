<?php 

function dd(mixed $value): void
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}

function abort(int $code = 404): void
{
  http_response_code($code);
  require(base_path() . "views/errors/$code.view.php");
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
  require __DIR__ . '/../views/'. $path;
  die();
}
