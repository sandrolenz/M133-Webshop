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
// Get all products
// -------------------------

$statement = $dblink->prepare("SELECT produkt.name, produkt.preis, geschmack.geschmack FROM produkt INNER JOIN geschmack ON produkt.fk_geschmack = geschmack.id");
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$produkteJSON = $result;

?>