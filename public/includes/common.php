<?php
    $host = "localhost";
    $dbname = "storesss";
    $username = "root";
    $password = "";

    try {
        $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

    if(!isset($_SESSION)){
        session_start();
    }
?>