<?php

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try{
       require_once "dbh.inc.php";
        // SQL CODE TO INSERT DATA IN DATABASE
       $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

       // PREPARE QUERY TO ADD IN DATABASSE FOR SECURITY REASONS
       $stmt = $pdo->prepare($query);

       $stmt->bindParam(":username", $username);
       $stmt->bindParam(":pwd", $pwd);
       $stmt->bindParam(":email", $email);

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