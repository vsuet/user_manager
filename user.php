<?php

function authorization($login, $password) {
    $db = new PDO("mysql:host=mysql60.hostland.ru;port=3306;dbname=host1323541_vsuet00", "host1323541_vsuet", "5q3tfcrK");

    $sql = "SELECT * FROM table_users WHERE login = '$login' AND password = '$password'";

    $result = $db->query($sql);
    $user = $result->fetch();

    $db = null;

    return $user;
}
