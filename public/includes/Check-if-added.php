<?php

function check_if_added_to_cart($item_id) {
  //  session_start(); 
    $user_id = $_SESSION['user_id']; // Lấy user_id từ session
    require("common.php"); // Kết nối đến CSDL

    
    $query = "SELECT * FROM users_items WHERE item_id=:item_id AND user_id=:user_id AND status='Added to cart'";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':item_id', $item_id);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();

    // Kiểm tra có 1 nhất 1 dòng trong kết quả
    if ($stmt->rowCount() >= 1) {
        return 1; // Sản phẩm được thêm vào giỏ
    } else {
        return 0; // Sản phẩm không được thêm vào giỏ
    }
}

?>
