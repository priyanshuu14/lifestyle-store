<?php
include '/includes/common.php';
if(!isset($_SESSION['email']))
        {
            header('location: index.php');
        }
$password = $_POST['password'];
$select_query = "SELECT password FROM users WHERE password='$password'";
$select_query_result = mysqli_query($select_query);
$row = mysqli_fetch_array($select_query_result);
$new_password = $_POST['new_password'];
$retype_password = $_POST['old_password'];
if (strlen($new_password) == strlen($retype_password) && $row != $new_password)
{
    $update_query = "UPDATE users SET password='$new_password' WHERE users.password='$password'";
    mysqli_query($update_query);
}
else
{
    header('location: settings.php');
}
?>