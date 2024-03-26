<?php
$vnev = $_POST["vnev"];
$vcim = $_POST["vcim"];

require_once './databaseconnect.php';
$sql = "INSERT INTO vevo (vazon, vnev, vcim) VALUES (NULL, ?, ?)";
$stmt = $connection->prepare($sql);
$stmt->bind_param("ss", $vnev, $vcim);

if ($stmt->execute()) {
    http_response_code(201);
    $message = array("message" => 'Sikeresen hozzáadva');
    echo json_encode($message);
} else {
    http_response_code(500);
    $message = array("message" => 'Nem sikerült hozzáadni: ' . $connection->error);
    echo json_encode($message);
}
?>