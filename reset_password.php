<?php
include_once 'dbConnection.php';
ob_start();
$phno     = $_POST['phno'];
$password = $_POST['password'];
$phno     = stripslashes($phno);
$phno     = addslashes($phno);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$q3 = mysqli_query($con, "SELECT * FROM user WHERE phno = '$phno'");
$user = mysqli_fetch_array($q3);
if (!empty($user)) {

$update_pass = mysqli_query($con, "UPDATE user set password = '$password' WHERE phno ='$phno' ");
if($update_pass)
{
    header("location:index.php?q8=Password Successfully Changed.  Now you can Login ");
}
} else {
    header("location:forgot_password.php?q8=Invalid Credintails");
}
ob_end_flush();
?>