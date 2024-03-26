<?php
header('Access-Control-Allow-Origin: *');


$kereSzoveg = explode('/', $_SERVER['QUERY_STRING']);
    
if ($kereSzoveg[0] === "vevo") {
    require_once 'vevo/index.php';
} else {
    http_response_code(405);
    $errorJson = array("error_message" => 'Nincs ilyen API');
    echo json_encode($errorJson);
}

