<?php
session_start();
if(isset($_SESSION['username']))
{
$con = mysqli_connect("localhost","root","","nanda");

$name=$_SESSION['username'];
$userquery="SELECT * FROM marks where username='$name';";
$userqueryresult= mysqli_query($con,$userquery);
$userqueryresultcheck = mysqli_num_rows($userqueryresult);
while ($set=mysqli_fetch_assoc($userqueryresult)) {

$mdaa=$set['mdaa'];
$mcn=$set['mcn'];
$moops=$set['moops'];
$mcoa=$set['mcoa'];
$mdbms=$set['mdbms'];
$mels=$set['mels'];
$memsa=$set['memsa'];
}
}
else{
	header('location:lms.php');
}


?>