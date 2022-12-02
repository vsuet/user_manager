<?php
include_once "user.php";

$postData = file_get_contents('php://input');
$data = json_decode($postData);

$login = $data->login;
$password = $data->password;

if ($login === null || $password === null) {
    $response = [
        'status' => 'error' ,
        'message' => 'not login or password'
    ];
} else {
    $temp_user = authorization($login, $password);
    $response = [
        'status' => 'success',
        'message' => 'OK',
        'user' => $temp_user
    ];
}
echo json_encode($response);
