<?php
$dbhost = "localhost";
$dbname = "project";
$username = "root";
$password = "";
$conn = mysqli_connect($dbhost, $username, $password);
    mysqli_select_db($conn, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>