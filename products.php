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
       include '/includes/header.php';
       ?>
       <?php
       include '/includes/check-if-added.php';
       ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt, we have it all in one place </p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="camera.jpg" alt="Camera">
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p> <Price : Rs 36000.00 </p>
                            <?php if(!isset($_SESSION['email']))  { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php } ?>
                            <?php else { 
                                if (check_if_added_to_cart(1))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="camera.jpg" alt="Camera">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price : Rs 40000.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php 
                            } else { 
                                if (check_if_added_to_cart(2))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="camera.jpg" alt="Camera">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price : Rs 50000.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php 
                            } else { 
                                if (check_if_added_to_cart(3))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="camera.jpg" alt="Camera">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price : Rs 80000.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php 
                            } else { 
                                if (check_if_added_to_cart(4))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="watch.jpg" alt="Camera">
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price : Rs 13000.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php 
                            } else { 
                                if (check_if_added_to_cart(5))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="watch.jpg" alt="Camera">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price : Rs 3000.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php 
                            } else { 
                                if (check_if_added_to_cart(6))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="watch.jpg" alt="Camera">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price : Rs 8000.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php 
                            } else { 
                                if (check_if_added_to_cart(7))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="watch.jpg" alt="Camera">
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price : Rs 18000.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php 
                            } else { 
                                if (check_if_added_to_cart(8))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="shirt.jpg" alt="Camera">
                        <div class="caption">
                            <h3>HW</h3>
                            <p>Price : Rs 800.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php 
                            } else { 
                                if (check_if_added_to_cart(9))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="shirt.jpg" alt="Camera">
                        <div class="caption">
                            <h3>luis Phil</h3>
                            <p>Price : Rs 1000.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php 
                            } else { 
                                if (check_if_added_to_cart(10))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="shirt.jpg" alt="Camera">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price : Rs 1500.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php 
                            } else { 
                                if (check_if_added_to_cart(11))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="shirt.jpg" alt="Camera">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price : Rs 1300.00</p>
                            <?php if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php"><input type="button" class="btn btn-primary" value="Buy Now"></a>
                            <? php 
                            } else { 
                                if (check_if_added_to_cart(12))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success">Added to Cart</a>';
                                } 
                            else {    
                            ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                            <?php 
                            }
                            }
                           ?>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <?php
        include '/includes/footer.php'
        ?>
    </body>
</html>