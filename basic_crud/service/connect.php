<?php
require_once "constant.php";

try {
    $conn = new PDO("mysql:host=$ServerName;dbname=$DbName", $UserName, $Password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }