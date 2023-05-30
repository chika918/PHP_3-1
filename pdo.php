<?php
    define('DB_DATABASE', 'checktest4');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);
    
    function connect() {
        try {
            $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
            //echo 'OK'; 接続確認用
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }

