<?php
include_once 'dbConnection.php';

session_start();
$username = $_SESSION['username'];


if (isset($_SESSION['key'])) {
    if (@$_GET['eid'] && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $eid = @$_GET['eid'];
        $delete_quiz_challenge1 = mysqli_query($con, "DELETE FROM quiz WHERE eid='$eid' ") or die('Error');
        $delete_quiz_challenge2= mysqli_query($con, "DELETE FROM history WHERE eid='$eid' ") or die('Error');
        $delete_quiz_challenge3 = mysqli_query($con, "DELETE FROM rank WHERE quiz_eid='$eid' ") or die('Error');
        $delete_quiz_challenge4 = mysqli_query($con, "DELETE FROM user_answer WHERE eid='$eid' ") or die('Error');   
        header("location:dash.php?q=8");
    }
}

if (isset($_SESSION['key'])) {
    if (@$_GET['quiz_challenge_desc_del'] && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $name = @$_GET['quiz_challenge_desc_del'];
        $delete_quiz_challenge5 = mysqli_query($con, "DELETE FROM quiz_challenge_comp WHERE name='$name' ") or die('Error');
        $delete_quiz_challenge1 = mysqli_query($con, "DELETE FROM quiz WHERE eid='$eid' ") or die('Error');
        $delete_quiz_challenge2= mysqli_query($con, "DELETE FROM history WHERE eid='$eid' ") or die('Error');
        $delete_quiz_challenge3 = mysqli_query($con, "DELETE FROM rank WHERE quiz_eid='$eid' ") or die('Error');
        $delete_quiz_challenge4 = mysqli_query($con, "DELETE FROM user_answer WHERE eid='$eid' ") or die('Error');  
          header("location:dash.php?q=8");
    }
}
if (isset($_SESSION['key'])) {
    if (@$_GET['dusername'] && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $dusername = @$_GET['dusername'];
        $update_status_off = mysqli_query($con, "UPDATE user SET status='off' WHERE username='$dusername' ") or die('Error');
        header("location:dash.php?q=1");
    }
}

if (isset($_SESSION['key'])) {
    if (@$_GET['phno'] && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $phno = @$_GET['phno'];
        $update_status_off = mysqli_query($con, "UPDATE user SET status='on' WHERE phno='$phno' ") or die('Error');
        header("location:dash.php?q=1");
    }
}

if (isset($_SESSION['key'])) {
    if (@$_GET['statusOn'] && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $status_On= @$_GET['statusOn'];
        $update_status_all_on = mysqli_query($con, "UPDATE user SET status='$status_On'  ") or die('Error');
        header("location:dash.php?q=1");
    }
}

if (isset($_SESSION['key'])) {
    if (@$_GET['statusOff'] && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
        $status_Off= @$_GET['statusOff'];
        $update_status_all_on = mysqli_query($con, "UPDATE user SET status='$status_Off'  ") or die('Error');
        header("location:dash.php?q=1");
    }
}
?>