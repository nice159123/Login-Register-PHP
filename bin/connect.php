<?php
    define('HOST', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DBNAME', 'loginregister_php');
    date_default_timezone_set('Asia/Bangkok');
    try{
        $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
        if ($conn->connect_error) {
            throw new Exception($conn->connect_error);
        }
    }catch(Exception $e){
        echo $e->getMessage();
        die('Connection failed: ' . $e->getMessage());
    }