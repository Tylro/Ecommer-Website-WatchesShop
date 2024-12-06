<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');
    exit(); 
}

$dsn = "mysql:host=localhost;dbname=storesss";
$username = "root";
$password_db = "";

try {
    $con = new PDO($dsn, $username, $password_db);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    session_destroy();


    header('location: logout.php');
    exit(); 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
