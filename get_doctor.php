<?php
include "db_connect.php";

$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);

$doctors = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $doctors[] = $row;
    }
}

header("Content-Type: application/json");
echo json_encode($doctors, JSON_PRETTY_PRINT);

$conn->close();
?>