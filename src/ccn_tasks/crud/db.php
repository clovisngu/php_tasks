<?php
$servername = "db";
$username = "Ap1";
$password = "masterP@75116830";
$dbname = "Ap1";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
?>