<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Leaderboard</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

<style>
.round {
  border: 1px solid white;
  padding:7px;
  border-radius:2px;
  background-color:green; 
}
.round:hover{
  background-color:lightgreen;
  color:black;
}

</style>
<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});</script>
</head>

<body style="background:white">
<div class="row">
<?php 
error_reporting(0); 
?>

</div></div>
<nav class="navbar navbar-default title1 ">
  <div  style="background-color: #e3f2fd; " class="container-fluid light " >
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dash.php?q=0"><b> Leaderboard</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
<li <?php
if (@$_GET['q'] == 0)
    echo 'class="active"';
?>><a href="leaderboard_result.php?q=0">Leaderboard Quiz Option<span class="sr-only">(current)</span></a></li>
    <li <?php
if (@$_GET['q'] == 1)
    echo 'class="active"';
?>><a href="leaderboard_result.php?q=1">View Leaderboard</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
  <li> 
 
  <?php
include_once 'dbConnection.php';
?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
                <li>  
<a href="index.php" style="color:white;"> <span class="round" >  Home </span></a>
</li>


            </ul>
          </div>
  </div>
</nav>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php

if (@$_GET['q'] == 0) {
    
  $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
  
  echo '<div class="table-responsive"><table class="table table-striped title1"  style="vertical-align:middle">
<tr><td style="vertical-align:middle"><b>S.N.</b></td><td style="vertical-align:middle"><b>Name</b></td><td style="vertical-align:middle"><b>Total Marks</b></td><td style="vertical-align:middle"><b>Action</b></td></tr>';
  $c = 1;
  while ($row = mysqli_fetch_array($result)) {
      $title   = $row['title'];
      $total   = $row['total'];
      $correct = $row['correct'];
      $time    = $row['time'];
      $eid     = $row['eid'];
      $status  = $row['status'];
      
          echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $correct * $total . '</td><td style="vertical-align:middle"><a href="leaderboard_result.php?q=1&Todquiz=' . $eid . '" class="btn logb" style="color:#FFFFFF;background:green;font-size:12px;padding:5px;">&nbsp;<span><b>View Result</b></span></a></td></tr>';
        
  }
  
}
if (@$_GET['q'] == 1) {
    if(isset($_GET['show'])){
        $show = $_GET['show'];
        $showfrom = (($show-1)*10) + 1;
        $showtill = $showfrom + 9;
    }
    else{
        $show = 1;
        $showfrom = 1;
        $showtill = 10;
    }
    $q = mysqli_query($con, "SELECT * FROM rank") or die('Error223');
   echo'
   <center>
   <div>
   <button type="button" onclick="window.print();" class="btn btn-success">Print</button>
   </div>
   <br>
   </center>
   ';
    echo '<div class="table-responsive">
<table class="table table-striped title1" >
<tr><td style="vertical-align:middle"><b>Rank</b></td><td style="vertical-align:middle"><b>Name</b></td><td style="vertical-align:middle"><b>Branch</b></td><td style="vertical-align:middle"><b>Username</b></td><td style="vertical-align:middle"><b>Semester</b></td><td style="vertical-align:middle"><b>Gender</b></td><td style="vertical-align:middle"><b>Quiz</b></td><td style="vertical-align:middle"><b>Score</b></td></tr>';
    $c = $showfrom-1;
    $total = mysqli_num_rows($q);
    if($total >= $showfrom){


         $q = mysqli_query($con, "SELECT * FROM history WHERE eid = '$_GET[Todquiz]'") or die('Error223');
        while ($row = mysqli_fetch_array($q)) {
            $e = $row['username'];
            $s = $row['score'];
            $quiz_name= $row['eid'];
            $q11=mysqli_query($con, "SELECT * FROM quiz WHERE eid= '$_GET[Todquiz]' ") or die('Error231');
            while ($row = mysqli_fetch_array($q11)) {
              $q_name = $row['title'];
             
          }
          $q_his=  mysqli_query($con, "SELECT * FROM history WHERE username='$e' AND eid = '$_GET[Todquiz]' ") or die('Error231');
          while ($row = mysqli_fetch_array($q_his)) {
              $total_score    = $row['score'];
             
          }
            $q12 = mysqli_query($con, "SELECT * FROM user WHERE username='$e' ") or die('Error231');
            while ($row = mysqli_fetch_array($q12)) {
                $name     = $row['name'];
                $branch   = $row['branch'];
                $username = $row['username'];
                $rollno     = $row['rollno'];
                $gender   = $row['gender'];
            }
            $c++;
            echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td style="vertical-align:middle">' . $name . '</td><td style="vertical-align:middle">' . $branch . '</td><td style="vertical-align:middle">' . $username . '</td><td style="vertical-align:middle">' . $rollno . '</td><td style="vertical-align:middle">' . $gender . '</td><td style="vertical-align:middle">' . $q_name . '</td><td style="vertical-align:middle">' . $total_score . '</td>';
        }
    }
    else{
    }
    echo '</table></div>';
    echo '<div class="panel title"><table class="table table-striped title1" ><tr>';
    $total = round($total/10) + 1;
    if(isset($_GET['show'])){
        $show = $_GET['show'];
    }
    else{
        $show = 1;
    }
    if($show == 1 && $total==1){
    }
    else if($show == 1 && $total!=1){
        $i = 1;
        while($i<=$total){
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
    }
    else if($show != 1 && $show==$total){
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';

        $i = 1;
        while($i<=$total){
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
    }
    else{
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show-1).'">&nbsp;<<&nbsp;</a></td>';
        $i = 1;
        while($i<=$total){
            echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.$i.'">&nbsp;'.$i.'&nbsp;</a></td>';
            $i++;
        }
        echo '<td style="vertical-align:middle;text-align:center"><a style="font-size:14px;font-family:typo;font-weight:bold" href="dash.php?q=2&show='.($show+1).'">&nbsp;>>&nbsp;</a></td>';
    }
    echo '</tr></table></div>';
}
?>
</div>
</div></div>
</body>
</html>
