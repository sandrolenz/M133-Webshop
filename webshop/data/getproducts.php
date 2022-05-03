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
// Get all products
// -------------------------

if (!empty($_GET['product'])) {
    $productid = $_GET['product'];
    $statement = $dblink->prepare("SELECT product.id, product.name, product.description, product.price, brand.name AS brand, brand.country, scent.name AS scent FROM product INNER JOIN brand ON product.brand = brand.id INNER JOIN scent ON product.scent = scent.id WHERE product.id = " . $productid);
} else {
    $statement = $dblink->prepare("SELECT product.id, product.name, product.description, product.price, brand.name AS brand, brand.country, scent.name AS scent FROM product INNER JOIN brand ON product.brand = brand.id INNER JOIN scent ON product.scent = scent.id");
}

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$productsJSON = $result;

?>