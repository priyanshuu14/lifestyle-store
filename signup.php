<?php
include '/includes/common.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="tex/css">
        <link href="style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"> 
            </script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> 
            </script>
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
        <div class="container" style="margin:auto;">
            <div class="row row_style">
                 <div class="col-lg-4 col-lg-offset-4">
                    <!--<div class="panel panel-default" style="margin:auto;">
                        <div class="panel-body">-->
                            <h1>SIGN UP</h1>
                            <form method="post" action="signup_script.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" required="true" pattern="[A-Za-z]{1,32}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" required="true" pattern="a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="true" pattern=".{6,}">
                                </div>
                                 <div class="form-group">
                                     <input type="number" class="form-control" placeholder="Contact" required="true" pattern="[0-9]{1,10}">
                                </div>
                                 <div class="form-group">
                                     <input type="text" class="form-control" placeholder="City" required="true" pattern="[A-Za-z]{1,32}">
                                </div>
                                 <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Address" required="true" pattern="[A-Za-z]{1,32}">
                                </div>
                                 <div class="form-group">
                                     <input type="button" class="btn btn-primary" value="Submit">
                                </div>
                            </form>
                       <!--</div>
                    </div>-->
                 </div>
            </div>
        </div>
        <?php
        include '/includes/footer.php'
        ?>
    </body>
</html>
