<?php
include '/includes/common.php';
session_start();
$user_id = $_POST['uid'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$password = $_POST['password'];
$city = $_POST['city'];
$address = $_POST['address'];
$select_query = "SELECT uid FROM users WHERE email='$email'";
$select_query_result = mysqli_query($con, $select_query);
$row = mysqli_fetch_array($select_query_result);
$count = mysqli_num_rows($row);
if($count != 0)
{
    echo "user already exists";
}
else
{
    $insert_query = "INSERT into users(email, name, phone, password, city, address) VALUES ('$email', '$name', '$contact', '$password', '$city', '$address')";
    $insert_query_result = mysqli_query($con, $insert_query);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header ('location: products.php');
}
?>