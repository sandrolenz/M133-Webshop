<?php

if (!isset($_SESSION)) {
    session_start();
}

require "dblink.php";

// -------------------------
// Update product
// -------------------------

switch ($_POST['action']) {
    case 'update':
        $id = $_POST["id"];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $brand = $_POST['brand'];
        $scent = $_POST['scent'];

        $statement = $dblink->prepare("UPDATE product SET name = '$name', description = '$description', price = $price, brand = $brand, scent = $scent WHERE id = $id");
        break;

    case 'create':
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $brand = $_POST['brand'];
        $scent = $_POST['scent'];

        $statement = $dblink->prepare("INSERT INTO product VALUES (NULL, '$name', '$description', $price, $brand, $scent)");
        break;

    case 'delete':
        $id = $_POST['id'];

        $statement = $dblink->prepare("DELETE FROM product WHERE id = $id");
        $statement->execute();
        
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        exit("Produkt wurde gelöscht");
        break;

    default:
        exit("No action specified");
        break;
}

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

exit($name . " wurde aktualisiert");