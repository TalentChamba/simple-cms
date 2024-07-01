<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cms";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn) {
    die("No database found". mysqli_connect_error());
}



?>