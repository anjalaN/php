<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=upload_file', 'root', '');
} catch (PDOException $e) {
    die('error sur la base de donner' . $e->getMessage());
}
