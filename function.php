<?php 

$server = "localhost";
$user = "root";
$password = "root";
$dbname = "loginsystem";

$conn = mysqli_connect($server,$user,$password, $dbname);

if(!$conn){
    die ("connection error");
}