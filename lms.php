<?php
session_start();
?>

<html>
<head>
<link rel="stylesheet"  href="css/BML.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Pompiere&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </head>
<body>
<div>
<img class="bimg" src="images/lib.jpg">

</div>
<div class="container-fluid">
<div class="row ">
<div class="col-sm-2 col-md-3 col-lg-4">
<img src="images/bml.jpg" class="bmlogo" >
</div>
<div class="col-sm-8 col-md-6 col-lg-4">
<div class="form">
<form  method="POST" action="login.php" >
<center><h1>Sign in</h1></center>
<br>

Userame:
<br>
<input name="username" type="txt" placeholder="  username">

<?php
if(isset($_SESSION['usernamenotify']))
echo $_SESSION['usernamenotify'];
?>

<br>
<div class="username">
Password:
<br>
<input name="password" type="password" placeholder=" password">

<?php
if(isset($_SESSION['passwordnotify']))
echo $_SESSION['passwordnotify'];
?>

<br><br>
</div>
<input class="signin" name="signin" value="sign in" id="submit" type="submit"><br><br><br><br>

</form>
</div>
</div>
<div class="col-sm-2 col-md-3 col-lg-4">
</div>
</div>
</div>
<div class="container second">
<div class="row">
<div class="col-sm-4">
<div class="card1">
<h1 style="margin-bottom:0px;">Office Timings</h1><br>
<p>9:00am to 5:30pm.<br><br>
Working days<br>
Monday to Friday,<br>
3rd and 5th Saturday<br>
working</pre>
</div>
<div class=" calender ">

<h2 style="padding-bottom:16px;">Calender</h2>
<h5><span style="color:red;"><-</span> June <span style="color:red;">-></span></h5>
<ul class="days">
<li class="day">mon </li>
<li class="day">tue </li>
<li class="day">wed </li>
<li class="day">thur </li>
<li class="day">fri </li>
<li class="day">sat </li>
<li class="day">sun </li>
</ul>
<br>
<ul class="cla">
<li><br></li>
<li>3</li>
<li>10</li>
<li>17</li>
<li>24</li>
</ul>
<ul class="cla">
<li><br></li>
<li>3</li>
<li>10</li>
<li>17</li>
<li>24</li>
</ul>
<ul class="cla">
<li><br></li>
<li>3</li>
<li>10</li>
<li>17</li>
<li>24</li>
</ul>
<ul class="cla">
<li>1</li>
<li>3</li>
<li>10</li>
<li>17</li>
<li>24</li>
</ul>
<ul class="cla">
<li>2</li>
<li>3</li>
<li>10</li>
<li>17</li>
<li>24</li>
</ul>
<ul class="cla">
<li style="background-color:#F25F5C;border-radius:35px;">2</li>
<li>3</li>
<li>10</li>
<li>17</li>
<li>24</li>
</ul>
<ul class="cla">
<li style="background-color:#F25F5C;border-radius:35px;">2</li>
<li>3</li>
<li>10</li>
<li>17</li>
<li>24</li>
</ul>

</div>
</div>
<div class="col-sm-8">
<div class="card2">
<P>25% Reservation  Admissions  Curriculum  Budgets  ICT  Inclusion  School Infrastructure  Mid Day Meal  Quality  SMCs  Recognition  Teachers  Vouchers  PreSchool Education  Elementary Education  Secondary Education  Higher Education  Vocational Training  Courts  Government Orders  Government Schools  Government Aided Schools  Private Schools  Budget Private Schools  CSR and Civil Society  Success Stories25% Reservation  Admissions  Curriculum  Budgets  ICT  Inclusion  School Infrastructure  Mid Day Meal  QualityPrivate Schools  Budget Private Schools  CSR and Civil Society  Success Stories25% Reservation  Admissions  Curriculum  Budgets  ICT  Inclusion  School Infrastructure  Mid Day Meal  Quality</P>
</div>
<h1 style="padding:30px;">Site news</h1>
<div class="parllel-cards">
<img class="pcard-image" src="images\home.jpg">
<P>25% Reservation  Admissions  Curriculum  Budgets  ICT  Inclusion  School Infrastructure  Mid Day Meal  Quality  SMCs  Recognition  Teachers  Vouchers  PreSchool Education  Elementary Education  Secondary Education  Higher Education  Vocational Training  Courts  Government Orders  Government Schools   </P>
</div>
<div class="parllel-cards">
<img class="pcard-image" src="images\home.jpg">
<P>25% Reservation  Admissions  Curriculum  Budgets  ICT  Inclusion  School Infrastructure  Mid Day Meal  Quality  SMCs  Recognition  Teachers  Vouchers  PreSchool Education  Elementary Education  Secondary Education  Higher Education  Vocational Training  Courts  Government Orders  Government Schools   </P>
</div>
<div class="parllel-cards">
<img class="pcard-image" src="images\home.jpg">
<P>25% Reservation  Admissions  Curriculum  Budgets  ICT  Inclusion  School Infrastructure  Mid Day Meal  Quality  SMCs  Recognition  Teachers  Vouchers  PreSchool Education  Elementary Education  Secondary Education  Higher Education  Vocational Training  Courts  Government Orders  Government Schools   </P>
</div>
<div class="parllel-cards">
<img class="pcard-image" src="images\home.jpg">
<P>25% Reservation  Admissions  Curriculum  Budgets  ICT  Inclusion  School Infrastructure  Mid Day Meal  Quality  SMCs  Recognition  Teachers  Vouchers  PreSchool Education  Elementary Education  Secondary Education  Higher Education  Vocational Training  Courts  Government Orders  Government Schools   </P>
</div>
<h2 style="padding:0px 30px; ">older topics...</h2>
<div class="menu">
<h1 id="menu" >Menu</h1>

<div  class="parllel-cards2" id="visi">
<p class="parllel-cards2-card">student information</p>
<p class="parllel-cards2-card">student information</p>
<p class="parllel-cards2-card">student information</p>
<p class="parllel-cards2-card">student information</p>
<p class="parllel-cards2-card">student information</p>
<p class="parllel-cards2-card">student information</p>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row ">
<div class="col-sm-12 footer">
<img class="footerimg"src="images\bml.jpg">
</div>
</div>
</div>

<script>
var x;
x=2;
document.getElementById("menu").onclick= function (){

if(x%2==0)
{
document.getElementById("visi").style.display="block"; 
}
else
{
document.getElementById("visi").style.display="none"; 
}
x=x+1;
}



</script>
</body>
</html>
