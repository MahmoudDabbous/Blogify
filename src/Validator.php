<?php

namespace Src;

class Validator
{
  public static function string(string $value, int $min = 1, int $max = PHP_INT_MAX): bool
  {
    return strlen(trim($value)) >= $min && strlen(trim($value)) <= $max;
  }

  public static function mail(string $value): bool
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }
}
