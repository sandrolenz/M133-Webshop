<?php

require "dblink.php";

// -------------------------
// Get all products
// -------------------------

if (empty($_GET['sortby']) || empty($_GET['sort'])) {
    $sortby = 'name';
    $sort = 'ASC';
} else {
    $sortby = $_GET['sortby'];
    $sort = $_GET['sort'];
}

if (!empty($_GET['product'])) {
    $productid = $_GET['product'];
    $statement = $dblink->prepare("SELECT product.id, product.name, product.description, product.price, brand.name AS brand, brand.country, scent.name AS scent FROM product INNER JOIN brand ON product.brand = brand.id INNER JOIN scent ON product.scent = scent.id WHERE product.id = " . $productid);
} else {
    $statement = $dblink->prepare("SELECT product.id, product.name, product.description, product.price, brand.name AS brand, brand.country, scent.name AS scent FROM product INNER JOIN brand ON product.brand = brand.id INNER JOIN scent ON product.scent = scent.id ORDER BY product." . $sortby . " " . $sort);
}

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$productsJSON = $result;

?>