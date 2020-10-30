<?php
include_once 'dbConnection.php';

session_start();
$username = $_SESSION['username'];


if (isset($_SESSION['key'])) {
    if (@$_GET['dusername'] && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $dusername = @$_GET['dusername'];
        $update_status_off = mysqli_query($con, "UPDATE user SET status='on' WHERE username='$dusername' ") or die('Error');
        header("location:dash.php?q=1");
    }
}


?>