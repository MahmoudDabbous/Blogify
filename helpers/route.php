<?php

function urlIs(string $value): bool
{
  return $_SERVER['REQUEST_URI'] === $value;
}

function mapRoute(string $url, array $routes): void
{
  if (array_key_exists($url, $routes)) {
    require($routes[$url]);
  } else {
    abort(404);
  }
}
