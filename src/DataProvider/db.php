<?php

$dbUser = "root";
$dbPassword = "root";

    try {
        $conn = new PDO(
            'mysql:host=mysql;dbname=project',
            $dbUser,
            $dbPassword
        );

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "Connection Successful";
    } catch (PDOException $e) {
        die('Cannot connect to database server');
    }