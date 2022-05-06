<?php

if (!isset($_SESSION)) {
    session_start();
}

require "dblink.php";

// -------------------------
// Update product
// -------------------------

$id = $_POST["id"];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$brand = $_POST['brand'];
$scent = $_POST['scent'];

$statement = $dblink->prepare("UPDATE product SET name = '$name', description = '$description', price = $price, brand = $brand, scent = $scent WHERE id = $id");
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

exit($name . " wurde aktualisiert");