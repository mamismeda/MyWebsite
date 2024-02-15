<?php

declare(strict_types=1);


function get_username(object $pdo, string $username) {
  $query = "SELECT username FROM userse WHERE username = :username;";
  $stmt = $pdo->prepare($query);
  $stmt->binidParam(":username", $username);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result
}

