<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "sharon";


$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection aborted: ".mysqli_connect_error());
}