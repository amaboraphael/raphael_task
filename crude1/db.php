<?php
$servername = "69b2314c73cd";
$username = "rapp1";
$password = "11036";
$dbname = "rapp1";

//creating connection

$conn = new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}



?>