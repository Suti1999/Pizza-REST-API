<?php 
    require_once './databaseconnect.php';

    $sql = "SELECT * FROM vevo";
    $result = $connection->query($sql);
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
