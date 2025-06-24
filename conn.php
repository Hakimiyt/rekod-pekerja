<?php 

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "maklumat";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if(!$conn){
    die("Connection error!");
} else{
    // echo "Database connected succefully";
}

?>