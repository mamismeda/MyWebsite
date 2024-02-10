<?php
//connection to database

$host = 'localhost';
$dbname = 'myfirstdatabase';
$dbusername = 'root';
$dbpassword = '';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname" , $dbusername, $dbpassword);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
