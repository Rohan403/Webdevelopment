<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Jharana Gardening</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div id="banner_image">
              <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                        <div class="container">	
                         <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading" style="background-color: greenyellow">
                                <h4 style="color:blue">LOGIN</h4>
                            </div>
                            <div class="panel-body" style="background-color:#50ce78">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary" style="background-color:greenyellow; color:blue">Login</button><br><br>
                                    <?php
                                if(isset($_GET["error"])){
                                  echo $_GET['error'];
                                }
                                ?>
                                </form><br/>
                            </div>
                            <div class="panel-footer" style="color:blue"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                                 
                </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
