<?php

$dbname = 'm133_la2';
$dbuser = 'm133_peter';
$dbpassword = 'HThacAhlZgCK';

try {
    $dblink = new PDO('mysql:host=localhost;dbname=' . $dbname, $dbuser, $dbpassword);
    // echo 'Connection successfully';
} catch (PDOException $exception) {
    echo 'Connection failed: ' . $exception->getMessage();
}

// -------------------------
// Get all scents
// -------------------------

$statement = $dblink->prepare("SELECT id, geschmack FROM geschmack");
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$geschmackJSON = $result;

?>