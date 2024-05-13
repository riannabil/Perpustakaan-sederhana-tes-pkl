<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "perpus";
$conn = mysqli_connect($server,$user,$password,$database);
if(!$conn){
    die("database error:".mysqli_connect_error());
}
?>