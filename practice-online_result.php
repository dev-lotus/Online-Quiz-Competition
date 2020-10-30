<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Quiz || Quiz Event </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css">
 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=PT+Serif&display=swap" rel="stylesheet">
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
<style>

*{
   
font-family: 'PT Serif', serif;
font-size:12px;
}
</style>
</head>
<?php
include_once 'dbConnection.php';
?>
<body onmousedown="return true" onselectstart="return false">
<div class="bg">
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php
if (@$_GET['q'] == 1)
    echo 'class="active"';
?> ><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
        <li <?php
if (@$_GET['q'] == 2)
    echo 'class="active"';
?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;My History</a></li>
  <li <?php
if (@$_GET['q'] == 3)
    echo 'class="active"';
?>><a href="practice-online.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Practice Online</a></li>

  </ul>
  
  <ul class="nav navbar-nav navbar-right">
  <li>  
 <?php
include_once 'dbConnection.php';
session_start();
if (!(isset($_SESSION['username']))) {
    header("location:index.php");
} else {
    $name     = $_SESSION['name'];
    $username = $_SESSION['username'];
    
    include_once 'dbConnection.php';
    echo '<span class="pull-right top title1" ><span style="color:black"><span><img src="image/user.png" style=" padding-bottom:5px;zoom:70%;"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello, '  . $name .' &nbsp;&nbsp;|&nbsp;&nbsp</span> <button type="button" class="btn btn-danger btn-xs"><a href="logout.php?q=account.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
}
?></li>
      </ul>

 
      </div>
  </div>
</nav>

</body>
</html>
<?php

if (@$_GET['q'] == 'result' && @$_GET['eid']) {
    $eid = @$_GET['eid'];
    $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error157');
    while ($row = mysqli_fetch_array($q)) {
        $total = $row['total'];
    }
    $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND username='$username' ") or die('Error157');
    
    while ($row = mysqli_fetch_array($q)) {
        $s      = $row['score'];
        $w      = $row['wrong'];
        $r      = $row['correct'];
        $status = $row['status'];
    }
    if ($status == "finished") {
        echo '<center><div class="container panel">
<center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="border:1px solid grey;font-size:20px;font-weight:1000;">';
        echo '<tr style="color:darkblue"><td style="vertical-align:middle">Total Questions</td><td style="vertical-align:middle">' . $total . '</td></tr>
      <tr style="color:darkgreen"><td style="vertical-align:middle">Correct Answer&nbsp;<span class="glyphicon glyphicon-ok-arrow" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $r . '</td></tr> 
    <tr style="color:red"><td style="vertical-align:middle">Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-arrow" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $w . '</td></tr>
    <tr style="color:orange"><td style="vertical-align:middle">Unattempted&nbsp;<span class="glyphicon glyphicon-ban-arrow" aria-hidden="true"></span></td><td style="vertical-align:middle">' . ($total - $r - $w) . '</td></tr>
    <tr style="color:darkblue"><td style="vertical-align:middle">Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td style="vertical-align:middle">' . $s . '</td></tr>';
   
    $q16 = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
    while ($row = mysqli_fetch_array($q16)) {
        $quiz_name      = $row['title'];
    }
    echo '<tr></tr></table></div></center><div class="panel"><br /><h3  style="font-family:calibri; text-align:center; ">:: Detailed Analysis of '.$quiz_name.' ::</h3><br /><ol style="font-size:20px;font-weight:bold;font-family:calibri;margin-top:20px">';
   
    $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$_GET[eid]'") or die('Error197');
    while ($row = mysqli_fetch_array($q)) {
        $question = $row['qns'];
        $qid      = $row['qid'];
        $quiz_eid      = $row['eid'];
  
        $q2 = mysqli_query($con, "SELECT * FROM user_answer WHERE eid='$_GET[eid]' AND qid='$qid' AND username='$_SESSION[username]'") or die('Error197');
        if (mysqli_num_rows($q2) > 0) {
            $row1         = mysqli_fetch_array($q2);
            $ansid        = $row1['ans'];
            $correctansid = $row1['correctans'];
            $q3 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$ansid'") or die('Error197');
            $q4 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$correctansid'") or die('Error197');
            $row2       = mysqli_fetch_array($q3);
            $row3       = mysqli_fetch_array($q4);
            $ans        = $row2['option'];
            $correctans = $row3['option'];
        } else {
            $q3 = mysqli_query($con, "SELECT * FROM answer WHERE qid='$qid'") or die('Error197');
            $row1         = mysqli_fetch_array($q3);
            $correctansid = $row1['ansid'];
            $q4 = mysqli_query($con, "SELECT * FROM options WHERE optionid='$correctansid'") or die('Error197');
            $row2       = mysqli_fetch_array($q4);
            $correctans = $row2['option'];
            $ans        = "Unanswered";
        }
        if ($correctans == $ans && $ans != "Unanswered") {
            echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:lightgreen;padding:10px;word-wrap:break-word;border:2px solid darkgreen;border-radius:10px;">' . $question . ' <span class="glyphicon glyphicon-ok" style="color:darkgreen"></span></div><br />';
            echo '<font style="font-size:14px;color:darkgreen"><b>Your Answer: </b></font><font style="font-size:14px;">' . $ans . '</font><br />';
            echo '<font style="font-size:14px;color:darkgreen"><b>Correct Answer: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
        } 
        else if ($ans == "Unanswered") {
            echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:#f7f576;padding:10px;word-wrap:break-word;border:2px solid #b75a0e;border-radius:10px;">' . $question . ' </div><br />';
            echo '<font style="font-size:14px;color:darkgreen"><b>Correct Answer: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
        } 
        else {
            echo '<li><div style="font-size:16px;font-weight:bold;font-family:calibri;margin-top:20px;background-color:#f99595;padding:10px;word-wrap:break-word;border:2px solid darkred;border-radius:10px;">' . $question . ' <span class="glyphicon glyphicon-remove" style="color:red"></span></div><br />';
            echo '<font style="font-size:14px;color:darkgreen"><b>Your Answer: </b></font><font style="font-size:14px;">' . $ans . '</font><br />';
            echo '<font style="font-size:14px;color:red"><b>Correct Answer: </b></font><font style="font-size:14px;">' . $correctans . '</font><br />';
            
        }
        echo "<br /></li>";
    }
    echo '</ol>';
    echo "</div>";  

    } else {
        die("Thats a 404 Error bro. You are trying to access a wrong page");
    }
}

?>