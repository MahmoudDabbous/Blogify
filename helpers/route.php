<?php

function urlIs(string $value): bool
{
  return $_SERVER['REQUEST_URI'] === $value;
}

function mapRoute(string $url, array $routes): void
{
  $uri = parse_url($url)['path'];
  if (array_key_exists($uri, $routes)) {
    require($routes[$uri]);
  } else {
    abort(404);
  }
}
