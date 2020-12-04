<?php 

$server = "localhost";
$user = "root";
$password = "root";
$dbname = "loginsystem";

$conn = mysqli_connect($server,$user,$password, $dbname);

if(!$conn){
    die ("Connection Fail : " . mysqli_connect_error());
}

//global setting



// signup configuration



//login configuration