<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECH Quiz</title>
     
 <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link rel="stylesheet" href="style.css">
   
 <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=PT+Serif&display=swap" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  
<style>
*{
   
   font-family: 'PT Serif', serif;
   font-size:13px;
   }
  .panel {
  -moz-box-shadow:    3px 3px 5px 6px #ccc;
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
  box-shadow:         3px 3px 5px 6px #ccc;
}
.round {
  border: 1px solid white;
  padding:7px;
  border-radius:2px;
  
}
.round:hover{
  background-color:white;
  color:black;
}
 h2 {font-family: 'Holtwood One SC', serif;font-weight: normal;font-size: 2.7em;margin:0 0 20px; text-shadow:0 0 12px rgba(0, 0, 0, 0.5);text-transform: uppercase;letter-spacing:-1px;}

  </style>
</head>
<?php
error_reporting(0);
?>
<body onmousedown="return true" onselectstart="return false" style="
  background-image: url('image/8.jpg');">
    
<nav class="navbar navbar-inverse">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="quiz_comp.php" class="navbar-brand" style="color:white;">TECH Quiz</a>
        </div>
        
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
        <li ><a href="quiz_comp.php">Home</a></li>  
        <li style="padding-left:10px"><a href="index.php">Play Now !!</a></li>
        <li class="active"><a href="leaderboard.php">Leaderboard<span class="sr-only">(current)</span></a></li>
      
       
       
      </ul>
            
        </div>
    </nav>
    <center>
    <h2 style="color:white;"id="headline">Leaderboard</h2> 
    </center>
   
    <?php
include_once 'dbConnection.php';
?>
<?php

  echo '<div class="panel title"> <div class="table-responsive">   
  <table class="table table-striped title1" >
  <tr><td style="vertical-align:middle"><b>Rank</b></td><td style="vertical-align:middle"><b>Name</b></td><td style="vertical-align:middle"><b>Username</b></td><td style="vertical-align:middle"><b>Gender</b></td><td style="vertical-align:middle"><b>Challenge</b></td><td style="vertical-align:middle"><b>Total Marks</b></td><td style="vertical-align:middle"><b>Your Score</b></td><td></td></tr>';
     $q12 = mysqli_query($con, "SELECT * FROM quiz WHERE practice_op=0 ") or die('Error231');
            while ($row = mysqli_fetch_array($q12)) {
                $title    = $row['title'];
                $eid    = $row['eid'];
                $total   = $row['total'];
            }
  $q2 = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' ORDER BY score DESC; ") or die('Error223');
  $total = mysqli_num_rows($q2);
  $c=0;
  while ($row = mysqli_fetch_array($q2)) {
    $username= $row['username'];
    $total_score = $row['score'];  
 
    $q12 = mysqli_query($con, "SELECT * FROM user WHERE username='$username' ") or die('Error231');
            while ($row = mysqli_fetch_array($q12)) {
                $name     = $row['name'];
                $branch   = $row['branch'];
                $username = $row['username'];
                $rollno     = $row['rollno'];
                $gender   = $row['gender'];
            }

    $c++;
    echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td style="vertical-align:middle">' . $name . '</td><td style="vertical-align:middle">' . $username . '</td><td style="vertical-align:middle">' . $gender . '</td><td style="vertical-align:middle">' . $title . '</td><td style="vertical-align:middle">' . $total . '</td><td style="vertical-align:middle">' . $total_score . '</td><td style="vertical-align:middle">';
      
}
    echo '</table></div></div>'; 
?>

</body>
</html>