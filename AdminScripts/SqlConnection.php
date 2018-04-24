<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "bubble_burst";

$conn = mysqli_connect($host, $user, $password, $database);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Successfully connected to host:  " . $host . ", user: " . $user . ", database: " . $database;
}
