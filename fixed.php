<?php


$con = mysqli_connect("localhost","root","","nanda");


$fixedquery="SELECT * FROM fixed ;";
$fixedqueryresult= mysqli_query($con,$fixedquery);

while ($sets=mysqli_fetch_assoc($fixedqueryresult)) {
$ncdaa=$sets['ncdaa'];
$nccn=$sets['nccn'];
$ncoops=$sets['ncoops'];
$nccoa=$sets['nccoa'];
$ncdbms=$sets['ncdbms'];
$ncels=$sets['ncels'];
$ncemsa=$sets['ncemsa'];
$oidaa=$sets['oidaa'];
$oicn=$sets['oicn'];
$oioops=$sets['oioops'];
$oicoa=$sets['oicoa'];
$oidbms=$sets['oidbms'];
$oiels=$sets['oiels'];
$oiemsa=$sets['oiemsa'];
}



?>