<?php
session_start();

// CONNEXION A LA BASE DE DONNÉES 

try {
    $dbname = new PDO('mysql:host=localhost;dbname=arMediaBdd', 'ARIAS', 'ARIAS');
} catch (Exception $e) {
    die('could not connect to database' . $e->getMessage());
}
