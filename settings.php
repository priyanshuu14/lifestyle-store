<?php
include '/includes/common.php';
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
    </head>
    <body>
       <?php 
       include '/includes/header.php'
       ?>
        <?php
       if(!isset($_SESSION['email']))
        {
            header('location: index.php');
        }
        ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-lg-4 col-lg-offset-4">
                    <h4> Change Password </h4>
                    <form method="post" action="settings-script.php">
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Current Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="new_password" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="retype_password" placeholder="Re-type Password">
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-primary" value="Change">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        include '/includes/footer.php'
        ?>
    </body>
</html>