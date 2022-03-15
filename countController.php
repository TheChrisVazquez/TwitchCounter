<?php
include 'config.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
$status = new stdClass();
switch ($method) {
    case 'GET': {
            $sql = 'SELECT * FROM `principal`';
            $res = $conn->query($sql);
            $status->status = true;
            $status->num = intval($res->fetch_assoc()['num']);
            echo json_encode($status);
            // echo $res->fetch_assoc()['num'];
            // echo json_encode($res->fetch_assoc()['num']);
        }
        break;
    case 'POST': {
            $sql = 'UPDATE principal SET num = num + 1';
            $conn->query($sql);
            $status->status = true;
            echo json_encode($status);
        }
        break;
}
