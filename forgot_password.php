<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<title> Quiz Event   </title>
   
   <link rel="stylesheet" href="css/main.css">
   <link  rel="stylesheet" href="css/font.css">
   <script src="js/jquery.js" type="text/javascript"></script>
  <link  rel="stylesheet" href="css/bootstrap.min.css"/>
   <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
    <link rel="stylesheet" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  
<script>
function validateForm() {

  var m = document.forms["form"]["phno"].value;
  if (m.length != 10) {
    document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == ""){
    document.getElementById("errormsg").innerHTML="Password must be filled out";
    return false;
  }
  if(a.length<5 || a.length>15){
    document.getElementById("errormsg").innerHTML="Passwords must be 5 to 15 characters long.";
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b){
    document.getElementById("errormsg").innerHTML="Passwords must match.";
    return false;
  }
}
</script>

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
</style>
</head>
<body  onmousedown="return true" onselectstart="return false" style="
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
        <li ><a href="leaderboard.php">Leaderboard<span class="sr-only">(current)</span></a></li>
      
       
      </ul>
           
        </div>

    </nav>


    <div class="row">

<div class="col-md-4"></div>
<div class="col-md-4 panel"> 
  <form class="form-horizontal" name="form" action="reset_password.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <h3 align="center">Forgot Password</h3>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php

if (@$_GET['q8']) {
  echo '<p style="color:red;font-size:15px;">' . @$_GET['q8'];
}
?></div>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
if (@$_GET['q7']) {
    echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
}
?></div>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="phno"></label>  
  <div class="col-md-12">
  <input id="phno" name="phno" placeholder="Enter your mobile number" pattern="[0-9]{10}" class="form-control input-md" type="" value="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter new password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style="text-align: center"> 
    <input  type="submit" value=" Change Password" class="btn btn-success btn-lg btn-block" style="text-align:center" />
    </div>
</div>

</fieldset>
</form>

</div>
</div></div>
</div>



















</body>
</html>