<?php
$host = "sql100.byetcluster.com";
$username = "root";
$password = "";
$database = "if0_41347373_DoctorsName";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
