<?php
// pour les erreurs
ini_set('display_errors', '1');
require_once 'config.php';
try {
    $connection = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME.';charset=utf8', DBLOGIN, DBMDP);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br />";
    echo "Erreur numero : " . $e->getCode();
    die();
}