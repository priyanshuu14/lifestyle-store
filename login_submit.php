<?php
include '/includes/common.php';
session_start();
$user_id = mysqli_real_escape_string($con, $_POST['uid']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
//$check = md5($password);
$select_query = "SELECT user_id, email FROM users WHERE email='$email' and password='$password'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);
$active = $row['active'];
$count = mysqli_num_rows($select_query_result);
if ($count == 0) 
{
  echo "User Does Not Exist";
}
else
{
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: products.php');
}
?>
