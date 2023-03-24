<?php

namespace Src;

class Router
{
  private static array $routes = [];

  private static function addRoute(string $method, string $uri, string $controller): void
  {
    self::$routes[] = [
      'method' => $method,
      'uri' => $uri,
      'controller' => $controller
    ];
  }

  public static function GET(string $uri, string $controller): void
  {
    self::addRoute('GET', $uri, $controller);
  }

  public static function POST(string $uri, string $controller): void
  {
    self::addRoute('POST', $uri, $controller);
  }

  public static function DELETE(string $uri, string $controller): void
  {
    self::addRoute('DELETE', $uri, $controller);
  }

  public static function PUT(string $uri, string $controller): void
  {
    self::addRoute('PUT', $uri, $controller);
  }

  public static function PATCH(string $uri, string $controller): void
  {
    self::addRoute('PATCH', $uri, $controller);
  }

  public function resolve(string $url, string $method): void
  {
    $uri = parse_url($url)['path'];
    foreach (self::$routes as $route) {
      if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
        require base_path() . 'controllers/' . $route['controller'] . '.php';
        return;
      }
    }
    abort();
  }
}
