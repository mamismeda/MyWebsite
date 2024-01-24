<?php

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try{
       require_once "dbh.inc.php";
        // SQL CODE TO INSERT DATA IN DATABASE
       $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

       // PREPARE QUERY TO ADD IN DATABASSE FOR SECURITY REASONS
       $stmt = $pdo->prepare($query);

       $stmt->bindParam(":username", $username);
       $stmt->bindParam(":pwd", $pwd);

      // ADD DATA IN DATABASE
       $stmt->execute();

       $pdo = null;
       $stmt = null;

       header("Location: ../index.php");

       die();
    } catch(PDOException $e){
         die("Query failed: " . $e->getMessage());
    }
 }else{
    header("Location: ../index.php");
 }