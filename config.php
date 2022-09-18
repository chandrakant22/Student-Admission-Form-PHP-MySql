<?php 
session_start();


$dbhost = "localhost";
$dbuser = "asterisc_creticStudent";
$dbpass = "$-%p{JV0CaxP";
$dbname = "asterisc_cretificate_Student";

// Create connection
$con =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
