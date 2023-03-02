<?php

require_once 'config.php';
//Check exist PDO class

if (class_exists('PDO')) {
    try {
        $dsn = DRIVER . ":dbname=" . DB . ';host:' . HOST;
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $conn = new PDO($dsn, USER, PASS, $options);
        // var_dump($conn);
        // echo $dsn.'</br>';
    } catch (PDOException $e) {
        require_once 'error.php';
        die();
    }
} else {
    echo 'Check PDO class';
}
