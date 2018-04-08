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
            header('location: login.php');
        }
        ?>
        <?php
        $user_id = $_GET['user_id'];
        $select_query = "SELECT * from users_items INNER JOIN items ON users_products.item_id = items.item_id WHERE user_id='$user_id' and status='Added to cart'";
        $select_query_result = mysqli_query($select_query);
        $row = mysqli_fetch_array($select_query_result);
        $count = mysqli_num_rows($row);
        if($count == 0)
        {
            echo "Add items to cart first";
        }
        else
        { ?>
        <div class="container">
            <table class="table table_style">
                <tr>
                    <th> Item Number </th>
                    <th> Item name </th>
                    <th> Price </th>
                    <th></th>
                </tr>
                <tr>
               <?php while($count)
                {  
                   $name = $_GET['name'];
                   $item_id = $_GET['item_id'];
                   $price = $_GET['price'];
                   $sum += $price;
                   ?>
                    <tr>
                        <td> <?php echo "$item_id"?> <?php echo "<a href='cart-remove.php?id={$row['id']}' class='remove-item-link'>Remove</a> </td>"?>
                        <td> <?php echo "$name"?> </td>
                        <td> <?php echo "$sum"?> </td>
                        <td></td>
                    </tr>
                <?php }
        }?> 
                <tr>
                    <td></td>
                    <td> Total </td>
                    <td> Rs. 0</td>
                    <td><a href="success.php"><input type="button" class="btn btn-primary" value="Confirm Order"></a></td>
                </tr>
            </table>
        </div>
        <?php
        include '/includes/footer.php'
        ?>
    </body>
</html>
