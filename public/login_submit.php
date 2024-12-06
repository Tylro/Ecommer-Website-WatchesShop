<?php
require("includes/common.php");

$email = $_POST['email'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=storesss";
$username = "root";
$password_db = "";

try {
    $con = new PDO($dsn, $username, $password_db);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT id, email FROM users WHERE email=:email AND password=:password";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $num = $stmt->rowCount();

    if ($num == 0) {
        $error = "Sai mật khẩu hoặc Email.";
        header('location: login.php?error=' . $error);
    } else {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location: products.php');
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
