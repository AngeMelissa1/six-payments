<?php
$host="localhost";
$user="root";
$pwd="";
$db="six_payments";
$con=mysqli_connect($host,$user,$pwd,$db);
if(!$con){
    die("connection error: ".mysqli_connect_error($con));
}
?>