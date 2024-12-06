<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>

<html>

<head>


    <meta charset="UTF-8">
    <title>Giày Beetis</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <div id="banner-image">
        <div class="container">
            <center>
                <div id="banner_content">
                    <h1><b>Nâng niu bàn chân bạn.</b></h1>
                    <p><b>~Săn ngay Black Friday!!! SALES OFF 50%~</b></p>
                    <a href="login.php" target="_blank"> <button class="btn btn-danger btn-lg active"><b>Mua ngay</b>
                        </button></a>

                </div>
            </center>
        </div>

    </div><br><br>



    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 col-sm-7">
                <div class="thumbnail">
                    <a href="#">
                        <image src="img/thumbnail-nam.jpg" />
                        <div class="caption">
                            <h2>Nam</h2>
                            <p>**********************************</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-7">
                <div class="thumbnail">
                    <a href="#">
                        <image src="img/thumbnail-nu.jpg" />
                        <div class="caption">
                            <h2>Nữ</h2>
                            <p>**********************************</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-7">
                <div class="thumbnail">
                    <a href="#">
                        <image src="img/thumbnail-treem.jpg" />
                        <div class="caption">
                            <h2>Trẻ em</h2>
                            <p>**********************************</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div><br><br><br><br>




    <footer class="fo">
        <div class="container">
            <center>
                <p>Copyright <small>&copy;</small> Giày Beetis | All Rights Reserved</p>
            </center>
        </div>


    </footer>


</body>

</html>