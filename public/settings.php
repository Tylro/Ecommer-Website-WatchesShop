<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
       
        
                <meta charset="UTF-8">
        <title>Giày Beetis | Đổi mật khẩu</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body>
        <?php 
		include 'includes/header.php'; 
		?>
        
        <div class="container"><br><br><br><br>
            <div class="row row_style4">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1> Đổi mật khẩu </h1>
					<div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Mật khẩu cữ" name="oldpassword">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Mật khẩu mới" name="newpassword">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Nhập lại mật khẩu" name="renewpassword">
                        </div>
                        <button class="btn btn-primary">Thay đổi</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?> 
       
        
    </body>
</html>



