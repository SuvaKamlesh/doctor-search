<?php
include "db_connect.php";

$search = isset($_GET['search']) ? trim($_GET['search']) : "";

$doctors = [];

if ($search !== "") {
    $sql = "SELECT * FROM doctors 
            WHERE name LIKE ? 
            OR specialization LIKE ? 
            OR city LIKE ?";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $searchTerm = "%" . $search . "%";
        $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
        $stmt->execute();

        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $doctors[] = $row;
        }

        $stmt->close();
    }
} else {
    $sql = "SELECT * FROM doctors";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $doctors[] = $row;
        }
    }
}

header("Content-Type: application/json");
echo json_encode($doctors, JSON_PRETTY_PRINT);

$conn->close();
?>