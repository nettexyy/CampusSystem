<?php

require_once "db.php";

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "GET") {

    $sql = "
        SELECT
            id,
            title,
            description,
            category,
            location,
            event_date,
            event_time,
            image
        FROM events
        ORDER BY event_date ASC
    ";

    $result = $conn->query($sql);

    $events = [];

    while ($row = $result->fetch_assoc()) {
        $events[] = $row;
    }

    echo json_encode([
        "success" => true,
        "events" => $events
    ]);

    exit;
}

http_response_code(405);

echo json_encode([
    "success" => false,
    "message" => "Method not allowed"
]);
?>