<?php
require("includes/common.php");

session_start();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];

    $dsn = "mysql:host=localhost;dbname=storesss";
    $username = "root";
    $password = "";

    try {
        $con = new PDO($dsn, $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "DELETE FROM users_items WHERE item_id=:item_id AND user_id=:user_id";
        $stmt = $con->prepare($query);
        $stmt->bindParam(':item_id', $item_id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();

        header('location: cart.php');
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>
