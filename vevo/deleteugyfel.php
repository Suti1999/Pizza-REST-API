<?php
require_once './databaseconnect.php';

$kereSzoveg = explode('/', $_SERVER['REQUEST_URI']);
if (count($kereSzoveg) > 1 && is_numeric($kereSzoveg[1])) {
    $id = intval($kereSzoveg[1]);
    $sql = 'DELETE FROM vevo WHERE vazon = ?';
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        http_response_code(200);
        echo json_encode(array("message" => "Sikeres törlés"));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Sikertelen törlés"));
    }
} else {
    http_response_code(404);
    echo json_encode(array("message" => "Nem létező ügyfél"));
}
?>
