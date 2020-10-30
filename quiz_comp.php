<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECH Quiz</title>
      
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
 <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link rel="stylesheet" href="style.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  
 <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=PT+Serif&display=swap" rel="stylesheet">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
body {font-family: 'Istok Web', sans-serif;background: url("http://picjumbo.com/wp-content/uploads/HNCK2189-1300x866.jpg") no-repeat #000;background-size: cover;min-height: 100%;margin: 0;}
.hero {position:relative; text-align: center; overflow: hidden; color: #fcfcfc; }
.hero h2 {font-family: 'Holtwood One SC', serif;font-weight: normal;font-size: 3.3em;margin:0 0 20px; text-shadow:0 0 12px rgba(0, 0, 0, 0.5);text-transform: uppercase;letter-spacing:-1px;}
.hero p {font-family: 'Abel', sans-serif;text-transform: uppercase; color: #5CCA87; letter-spacing: 6px;text-shadow:0 0 12px rgba(0, 0, 0, 0.5);font-size: 1.2em;}
.hero-wrap {padding: 3.5em 10px;}
.hero p.intro {font-family: 'Holtwood One SC', serif;text-transform: uppercase;letter-spacing: 1px;font-size: 2.7em;margin-bottom:20px;}
.hero p.year {color: #fff; letter-spacing: 20px; font-size: 34px; margin: -25px 0 25px;}
.hero p.year i {font-size: 14px;vertical-align: middle;}
 .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
    box-shadow:         3px 3px 7px 3px #ccc;
  }
  
.fa-github {
  background: black;
  color: white;
}
  .fa {
 font-size:40px;
 text-decoration:none;
}
*{
   
   font-family: 'PT Serif', serif;
   font-size:13px;
   }
.fa:hover {
    opacity: 0.7;
 text-decoration:none;
 
 color: white;
}

  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
    
  }
  .panel {
  -moz-box-shadow:    3px 3px 5px 6px #ccc;
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
  box-shadow:         10px 10px 10px 10px #ccc;
}
.desc{
    padding-left:20px;
    padding-right:20px;
}
.round {
  border: 1px solid white;
  padding:7px;
  border-radius:2px;
  
}
body{
   
   font-family: 'PT Serif', serif;
   font-size:12px;
   }
   
@media only screen and (max-width: 300px) {
  #portfolio_div {
   padding-left:20px;
   padding-right:20px;
  }
}
.round:hover{
  background-color:white;
  color:black;
}
  </style>
<body>
    
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
        <li class="active" ><a href="quiz_comp.php">Home</a></li>  
        <li style="padding-left:10px"><a href="index.php">Play Now !!</a></li>
        <li ><a href="leaderboard_result.php">Leaderboard</a></li>
       
       
      </ul>
            
        </div>
    </nav>
	<header class="hero">
    <div class="hero-wrap">
     <p class="intro" id="intro">Tech Quiz</p>
		 <h2 id="headline">CONTEST</h2>
         <br>
		 <p class="year"><i class="fa fa-star"></i> 2020 <i class="fa fa-star"></i></p>
     <p>Test your smarts !!</p>
     <p style="color:green; font-weight:1000;">Register Now</p>
   </div>
	</header>


    <div style="background-color:white;">
    <br><br>
<!-- Container (Portfolio Section) -->
<h2 class="container-fluid text-center bg-white" style="font-family: 'Holtwood One SC', serif; color: #5CCA87">Weekly Quiz Contest</h2><br>
<div id="portfolio" class="container  bg-grey" >
  <br><br>
  <div class="row slideanim">
  <?php
include_once 'dbConnection.php';
?>
  <?php
  $q = mysqli_query($con, "SELECT * FROM quiz_challenge_comp") or die('Error197');
  while ($row = mysqli_fetch_array($q)) {

      $name    = $row['name'];
        $image_link    = $row['image_link'];
        $quiz_desc   = $row['quiz_desc'];
        $date_comp   = $row['date_comp'];
        $time_quiz   = $row['time_quiz'];
        $difficulty   = $row['difficulty'];
        echo'
        <div class="col-sm-4"></div>
        <div class="col-sm-4" id="portfolio_div">
      <div class="thumbnail">
        <img src="'.$image_link.'" alt="Paris" width="400" height="300">
        <p class="text-center" style=" font-family: "PT Serif", serif; font-size:16px"><strong>'.$name.'</strong></p>
       <div class="desc">
       <p style="text-align: justify;">'.$quiz_desc.'</p>
       <br>
       <p>Date: '.$date_comp.'</p>
       <p>Time: '.$time_quiz.'</p>
       <p>Difficulty: '.$difficulty.'</p>
       </div>
      </div>
    </div>
        
        
        
        ';
  }
  ?>
   
  </div></div>
  <br>
  
  <div class="container-fluid text-center bg-black" style="background-color:black; padding:30px;">
  <p style="color:green; font-weight:1000;font-family: 'Abel', sans-serif; letter-spacing:1px;">Author: Lotus Biswas</p>
  <p style="color:green; font-weight:1000;font-family: 'Abel', sans-serif; letter-spacing:1px;">Conatact Me: lotushotmail111@gmail.com</p>
    <a href="https://github.com/dev-lotus" class="fa fa-github"></a>
  </div>
  
</body>
</html>