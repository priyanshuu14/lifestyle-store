<?php
include '/includes/common.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="tex/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"> 
            </script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> 
            </script>
    </head>
    <body>
       <?php 
       include '/includes/header.php'
       ?>
        <?php
        if(isset($_SESSION['email']))
        {
            header('location: products.php');
        }
        ?>
        <div class="container">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default" style="margin-left:auto; margin-right:auto;">
                        <div class="panel-body">
                            <p class="text-warning" align="center">Login To Make Purchase</p>
                                    <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                    <input type="button" class="btn btn-primary" value="Login">
                                    </div>
                                    </form>  
                        </div>
                        <div class="panel-footer">
                            <p class="text-warning" align="center"><a href="signup.html">Don't have an account? Register</a></p>
                        </div>
                    </div>
                </div>
        </div>  
        <?php
        include '/includes/footer.php'
        ?>
    </body>
</html>
