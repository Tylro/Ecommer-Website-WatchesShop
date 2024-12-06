<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Giày Beetis | Giỏ hàng</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body style="padding-top: 50px;">

    <?php
    include 'includes/header.php';
    ?>

    <br><br><br>
    <div class="container">
        <div class="row row_style2">
            <div class="col-sm-10 col-sm-offset-1">
                <table class="table table-striped">

                    <?php
                    $sum = 0;
                    $user_id = $_SESSION['user_id'];
                    $dsn = "mysql:host=localhost;dbname=storesss";
                    $username = "root";
                    $password = "";

                    try {
                        $con = new PDO($dsn, $username, $password);
                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id=:user_id AND status='Added to cart'";
                        $stmt = $con->prepare($query);
                        $stmt->bindParam(':user_id', $user_id);
                        $stmt->execute();

                        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        if ($stmt->rowCount() >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Thứ tự</th>
                                    <th>Tên</th>
                                    <th>Giá</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                foreach ($result as $row) {
                                    $sum += $row["Price"];
                                    $id = $row["id"];
                                    echo "<tr>
                                              <td>" . "#" . htmlspecialchars($row["id"]) . "</td>
                                              <td>" . htmlspecialchars($row["Name"]) . "</td>
                                              <td>Rs " . htmlspecialchars($row["Price"]) . "</td>
                                              <td><a href='cart-remove.php?id=" . htmlspecialchars($row['id']) . "' class='remove_item_link'> Xóa </a></td>
                                          </tr>";
                                }
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . htmlspecialchars($sum) . "</td>
                                          <td><a href='success.php?itemsid=" . htmlspecialchars($id) . "'class='btn btn-primary'>Xác nhận đơn hàng</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2><br>Thêm vào giỏ hàng!</h2><p><a href='products.php'>Bấm vào đây</a> để tiếp tục khám phá</p></center>";
                        }
                    } catch (PDOException $e) {
                        echo "Connection failed: " . htmlspecialchars($e->getMessage());
                    }
                    ?>
                    <?php
                    ?>
                </table>
            </div>
        </div>
    </div>

    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>