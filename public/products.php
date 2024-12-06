<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
    exit(); // Stop execution after redirect
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Giày Beetis | Sản phẩm</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>

    <br><br><br><br><br>
    <div class="container">

        <div class="jumbotron">
            <h1>Giày Beetis </h1>
            <p>Mua sắm thoải mái không lo về giá!</p>
        </div>

    </div>

    <div class="container">
        <div class="row text-center">

            <!-- Add your product thumbnails here with PDO and htmlspecialchars() -->

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/5.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Hunter Street"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("660.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(1)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/2.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Hunter Core"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("780.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(2)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/3.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Eva 1"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("330.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(3)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/4.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Eva 2"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("410.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(4)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/9.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Barbie"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("320.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(5)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/10.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Hunter Green"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("690.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(6)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/11.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Embrace"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("525.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(7)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/12.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Hunter X"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("910.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(8)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/8.jpg" alt="Responsive image" id="imgs">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Red"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("380.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(9)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/6.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Avenger"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("450.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(10)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/13.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Pink"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("340.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(11)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/14.jpg" alt="Responsive image">
                    <div class="caption">
                        <h3>
                            <?php echo htmlspecialchars("Rainbow"); ?>
                        </h3>
                        <p>
                            <?php echo "Giá: " . htmlspecialchars("470.000"); ?>
                        </p>
                        <?php
                        if (check_if_added_to_cart(12)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Đã thêm vào giỏ hàng</a>';
                        } else {
                            ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">
                                <?php echo htmlspecialchars("Thêm vào giỏ hàng"); ?>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <footer class="fo">
        <div class="container">
            <center>
                <p>Copyright <small>&copy;</small> Giày Beetis | All Rights Reserved</p>
            </center>
        </div>
    </footer>
</body>

</html>