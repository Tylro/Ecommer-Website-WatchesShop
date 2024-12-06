<?php

require("includes/common.php");

// Redirect to index.php if the user is not logged in
if (!isset($_SESSION['email'])) {
    header('location: index.php');
    exit(); // Make sure to exit after a header redirection
}

$user_id = $_SESSION['user_id'];

// Update the status of items in the cart to 'Confirmed' using PDO to prevent SQL injection
try {
    $query = "UPDATE users_items SET status='Confirmed' WHERE user_id=:user_id AND status='Added to cart'";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Giày Beetis | Mua hàng thành công!</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<?php include 'includes/header.php'; ?>

<br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="jumbotron">
        <center>
            <h2><b>Đơn hàng của bạn đã được xác nhận. Cảm ơn bạn vì đã mua hàng ở Beetis.</b></h2>
        </center>
        <hr>
        <center>
            <p>~<a href="products.php">Bấm vào đây để tiếp tục mua hàng.</a>~</p>
        </center>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>
