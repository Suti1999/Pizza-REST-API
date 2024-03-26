<?php
switch ($_SERVER['REQUEST_METHOD']) {
    case 'DELETE':
        require_once './vevo/deleteugyfel.php';
        break;
    case 'GET':
        require_once './vevo/getugyfel.php';
        break;
    case 'POST':
        require_once './vevo/postugyfel.php';
        break;
    case 'PUT':
        require_once './vevo/putugyfel.php';
        break;
    default:
        http_response_code(409);
        break;
}
