<?php
$title = "Your information";
include 'exer2/header.php';
$nimi = $_POST["nimi"];
$email = $_POST["email"];

echo "Hello " .  $nimi .  " <br> Your email id is: " . $email;

include 'exer2/footer.php';
?>