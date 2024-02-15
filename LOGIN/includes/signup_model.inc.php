<?php

declare(strict_types=1);


function get_username(object $pdo, string $username) {
  $query = "SELECT username FROM userse WHERE username = :username;";
  $stmt = $pdo->prepare($query);
}

