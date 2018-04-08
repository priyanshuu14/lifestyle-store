<?php
include '/includes/common.php'
?>
<!DOCTYPE html>
<html>
    <head>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="tex/css">
        <link href="style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"> 
            </script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> 
            </script>
            
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="style.css" type="text/css"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        
    </head>

    <body>
       <?php 
       include '/includes/header.php';
       ?>
        <?php
        if(isset($_SESSION['email']))
        {
            header('location: products.php');
        }
        ?>
       
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <a href="products.html" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
        <?php
        include '/includes/footer.php';
        ?>
    </body>
</html>
