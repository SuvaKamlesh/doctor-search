<?php
include "db_connect.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$doctor = null;

if ($id > 0) {
    $sql = "SELECT * FROM doctors WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $doctor = $result->fetch_assoc();
        }

        $stmt->close();
    }
}

header("Content-Type: application/json");
echo json_encode($doctor, JSON_PRETTY_PRINT);

$conn->close();
?>