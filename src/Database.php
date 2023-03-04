<?php

namespace Src;

use PDO;
use PDOStatement;

class Database
{
  public PDO $connection;
  private PDOStatement $stmt;

  public function __construct($config)
  {
    $dns = 'mysql:' . http_build_query($config, arg_separator: ';');
    $this->connection = new PDO($dns, 'root', '', [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
  }

  public function query(string $query, array $params = [])
  {
    $this->stmt = $this->connection->prepare($query);
    $this->stmt->execute($params);

    return $this;
  }

  public function all(): array|false
  {
    return $this->stmt->fetchAll();
  }

  public function findOrFail(): array|false
  {
    $res = $this->stmt->fetch();
    if (!$res) {
      abort();
    }
    return $res;
  }
}
