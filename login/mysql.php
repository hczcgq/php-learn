<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname="chen";

$conn = new mysqli($servername, $username, $password,$dbname);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>