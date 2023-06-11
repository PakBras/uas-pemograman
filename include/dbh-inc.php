<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "game" ;

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    echo "connected succesfully";
}
?>