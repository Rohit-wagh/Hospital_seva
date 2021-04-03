<?php
$servername='localhost';
$username="root";
$password="";
$db='hospital';

$con = mysqli_connect($servername,$username,$password,$db);
if($con){
	echo "Data is connection ";
	}
else{
	echo "no connection";
}
?>