<?php
require_once 'env.php';

global $db;

try{
    $db = new PDO("mysql:dbname=" . DBNAME . ";host=" . DBHOST, DBUSER, DBPASS);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}