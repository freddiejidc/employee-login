<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "systemname";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {

die('Conntection failed: ' .mysqli_connect_error());

}