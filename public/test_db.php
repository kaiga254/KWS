<?php

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=register;charset=utf8mb4',
        'root',
        ''
    );

    echo "Database connected successfully";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
