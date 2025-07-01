<?php
header("Content-Type: application/json");

$response = [
    "status" => "success",
    "message" => "أهلاً بك في واجهة API الخاصة بي 🎉"
];

echo json_encode($response);
?>
