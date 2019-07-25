<?php
$dbUser = "root";
$dbPass = "";
$server = "localhost";
$dbName = "suns_feather";

$conn = mysqli_connect($server,$dbUser,$dbPass,$dbName);

if(!$conn){
    die("Fallo de conexión".mysqli_connect_error());
}
