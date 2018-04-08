<?php
include '/includes/common.php';
session_start();
echo "$_GET('id')";
echo "$_GET('user_id')";
$user_id = $_GET['user_id'];
$item_id = $_GET['item_id'];
$insert_query = "INSERT into users_items (user_id, item_id, status) VALUES ('$user_id', '$item_id', 'Added to cart')";
mysqli_query($con, $insert_query);
header('location: poducts.php');
?>
