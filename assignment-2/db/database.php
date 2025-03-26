<?php
  $host = 'localhost';
  $dbname = 'auth_system';
  $username = 'root'; // Default for XAMPP
  $password = '';     // Default is empty for XAMPP

  try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      die("Connection failed: " . $e->getMessage());
  }
?>
