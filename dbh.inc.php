<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "nm-database";


$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection aborted: ".mysqli_connect_error());
}