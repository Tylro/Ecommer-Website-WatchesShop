<?php
require("includes/common.php");

if (!isset($_SESSION['email'])) {
    header('location: index.php');
    exit(); // Stop execution after redirect
}

$old_pass = $_POST['oldpassword'];
$new_pass = $_POST['newpassword'];
$rep_pass = $_POST['renewpassword'];

// Connect to the database using PDO
$dsn = "mysql:host=localhost;dbname=storesss";
$username = "root";
$password_db = "";

try {
    $con = new PDO($dsn, $username, $password_db);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT email, password FROM users WHERE email = :email";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':email', $_SESSION['email']);
    $stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $orig_pass = $row['password'];

    if ($new_pass != $rep_pass) {
        header('location: settings.php?error=Mật khẩu không khớp.');
    } else {
        if ($old_pass == $orig_pass) {
            $query = "UPDATE users SET password = :new_pass WHERE email = :email";
            $stmt = $con->prepare($query);
            $stmt->bindParam(':new_pass', $new_pass);
            $stmt->bindParam(':email', $_SESSION['email']);
            $stmt->execute();

            header('location: settings.php?error=Cập nhật thành công.');
        } else {
            header('location: settings.php?error=Sai mật khẩu cũ.');
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
