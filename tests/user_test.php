<?php
include "../user.php";

$temp_user = authorization("admin", "123");

$user = [
    "login" => $temp_user["login"],
    "password" => $temp_user["password"],
    "is_active" => $temp_user["is_active"]
    ];

foreach ($user as $key => $value) {
    echo "$key -> $value <br/>";
}