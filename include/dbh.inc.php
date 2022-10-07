<?php
$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "forum";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if (!$conn) {
    die("Connetion failed: " . mysqli_connect_error());
}