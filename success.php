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
       <?php
       $item_id = $_GET['item_id'];
       $update_query = "UPDATE users_items SET status='confirmed' WHERE users_items.item_id='$item_id'";
       mysqli_query($con, $update_query);
       ?>
        <div class="container text_style">
            <p align="center"> Your order is confirmed. <br> Thank you for shopping with us. <br> <a href="products.php">Click Here</a> to purchase another item.</p>
        </div>
        <?php
        include '/includes/footer.php'
        ?>
    </body>
</html>
