<?php

class Validator
{
  public static function string(string $value, int $min = 1, int $max = PHP_INT_MAX): bool
  {
    return trim($value) >= $min && trim($value) <= $max;
  }

  public static function mail(string $value): bool
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }
}
