<?php
require("includes/common.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

$dsn = "mysql:host=localhost;dbname=storesss";
$username = "root";
$password_db = "";

try {
    $con = new PDO($dsn, $username, $password_db);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $regex_num = "/^[789][0-9]{9}$/";

    $query = "SELECT * FROM users WHERE email=:email";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $num = $stmt->rowCount();

    if ($num != 0) {
        $m = "<span class='red'>Email đã tồn tại</span>";
        header('location: signup.php?m1=' . $m);
    } else if (!preg_match($regex_email, $email)) {
        $m = "<span class='red'>Email không khả dụng</span>";
        header('location: signup.php?m1=' . $m);
    } else if (!preg_match($regex_num, $contact)) {
        $m = "<span class='red'>SĐT không khả dụng</span>";
        header('location: signup.php?m2=' . $m);
    } else {
        $query = "INSERT INTO users(name, email, password, contact, city, address) VALUES(:name, :email, :password, :contact, :city, :address)";
        $stmt = $con->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':address', $address);
        $stmt->execute();

        $user_id = $con->lastInsertId();
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $user_id;
        header('location: products.php');
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
