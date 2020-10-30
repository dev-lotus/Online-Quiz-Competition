<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> TECH Quiz  </title>
   
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link rel="stylesheet" href="style.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  
 <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=PT+Serif&display=swap" rel="stylesheet">
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
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value; 
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="Name must be filled out.";
    return false;
  }
  var br = document.forms["form"]["branch"].value;
  if (br == "") {
    document.getElementById("errormsg").innerHTML="Please select your branch";
    return false;
  }
 var rn =document.forms["form"]["rollno"].value;
 if(rn == ""){
   document.getElementById("errormsg").innerHTML="Please select your year";
   return false;
 }
  var g = document.forms["form"]["gender"].value;
  if (g=="") {
    document.getElementById("errormsg").innerHTML="Please select your gender";
    return false;
  }
  var x = document.forms["form"]["username"].value;
  if (x.length == 0) {
    document.getElementById("errormsg").innerHTML="Please enter a valid username";
    return false;
  }
  if (x.length < 4) {
    document.getElementById("errormsg").innerHTML="Username must be at least 4 characters long";
    return false;
  }
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
body{
  zoom:95%;
}
  </style>
</head>
<body onmousedown="return true" onselectstart="return false" style="
  background-image: url('image/9.jfif');">

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
        <li class="active" style="padding-left:10px"><a href="index.php">Play Now !!<span class="sr-only">(current)</span></a></li>
        <li ><a href="leaderboard_result.php">Leaderboard</a></li>
       
       
      </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>  
<a href="#" data-toggle="modal" data-target="#myModal" style="color:white;"> <span class="round" >  Login  </span></a>
</li>

<li>
  
<a href="#" data-toggle="modal" data-target="#login" style="color:white;"> <span  class="round">Admin Login </span></a>

</li>
            </ul>
        </div>
    </nav>
<div class="row">
<div class="col-md-2 col-md-offset-4"></div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Student Login </span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="Username">Enter Username</label>  
  <div class="col-md-6">
  <input id="username" name="username" placeholder="Username" class="form-control input-md" type="username">
    
  </div>
</div>
<div class="form-group" >
  <label class="col-md-3 control-label" for="password">Enter Password</label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
    </fieldset>
</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 panel"> 
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <h3 align="center">Registration Form</h3>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
if (@$_GET['q7']) {
    echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
}
if (@$_GET['q8']) {
   
echo '<script type="text/javascript">';
echo ' alert("'. @$_GET['q8'] . '")';  
echo '</script>';
}
?></div>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" value="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12" style="color:grey;">Gender &nbsp &nbsp &nbsp
  <input type="radio" id="gender" name="gender" value="Male" checked> Male
  <input type="radio" id="gender" name="gender" value="Female"> Female<br>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="branch"></label>
  <div class="col-md-12">
    <select id="branch" name="branch" placeholder="Select your branch" class="form-control input-md" >
   <option value="">Select Branch</option>
  <option value="BSC IT" >BSC IT</option>
  <option value="BCA">BCA</option>
  <option value="MCA" >MCA</option>
  <option value="BTECH">BTECH</option>
  <option value="BTECH">MTECH</option>
   </select>

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="branch"></label>
  <div class="col-md-12">
    <select id="rollno" name="rollno" placeholder="Select your Year" class="form-control input-md" >
   <option value="">Select Semester</option>
  <option value="1" >1</option>
  <option value="2">2</option>
  <option value="3" >3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
   </select>

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label title1" for="username"></label>
  <div class="col-md-12">
    <input id="username" name="username" placeholder="Choose a username" class="form-control input-md" type="username" value="" style="<?php
if (isset($_GET['q7']))
    echo "border-color:red";
?>">
    
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
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
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
    <input  type="submit" value=" Register Now " class="btn btn-success btn-lg btn-block" style="text-align:center" />
    </div>
</div>

</fieldset>
</form>

<a href="forgot_password.php"  style="color:black;"> <span > Forgot Password ? </span></a>

</div>
</div></div>
</div>

<div class="row">
<div class="col-md-2 col-md-offset-4"></div>
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Admin Login </span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="admin.php?q=index.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="Username">Enter Username</label>  
  <div class="col-md-6">
<input type="text" name="uname" maxlength="20"  placeholder="Username" class="form-control"/> 

  </div>
</div>
<div class="form-group" >
  <label class="col-md-3 control-label" for="password">Enter Password</label>
  <div class="col-md-6">
<input type="password" name="password" maxlength="30" placeholder="Password" class="form-control"/>

  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<input type="submit" name="login" value="Login" class="btn btn-primary" />
    </fieldset>
</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</body>
</html>
