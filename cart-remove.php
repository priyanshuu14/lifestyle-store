<?php
include '/includes/common.php';
$user_id = $_GET['user_id'];
$item_id = $_GET['item_id'];
$delete_query = "DELETE FROM users_items WHERE user_id='$user_id' and item_id='$item_id'";
mysqli_query($con, $delete_query);
header ('location: cart.php');
?>