<?php
//development
        $host = '127.0.0.1';
        $db = 'dans';
        $user = 'root';
        $password = '';
        $charset = 'utf8mb4';

        // $host = 'remotemysql.com';
        // $db = '4lQQfKSKwt';
        // $user = '4lQQfKSKwt';
        // $password = '7lDSA5Ebnp';
        // $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {
    throw new PDOException($e->getMessage());
}

        require_once 'crud.php';
        $crud = new crud($pdo);