<?php

$dbname = 'm133_webshop';
$dbuser = 'm133_fritz';
$dbpassword = 'aDQBiW4K1JfQXxuM';

try {
    $dblink = new PDO('mysql:host=localhost;dbname=' . $dbname, $dbuser, $dbpassword);
    // echo 'Connection successfully';
} catch (PDOException $exception) {
    echo 'Connection failed: ' . $exception->getMessage();
}

// -------------------------
// Get all scents
// -------------------------

$statement = $dblink->prepare("SELECT id, name FROM scent");
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$scentJSON = $result;

?>