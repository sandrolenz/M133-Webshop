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
// Get products in cart
// -------------------------

$cartItems = "(" . implode(",", $_SESSION['cart']) . ")";

$statement = $dblink->prepare("SELECT product.id, product.name, product.description, product.price, brand.name AS brand, brand.country, scent.name AS scent FROM product INNER JOIN brand ON product.brand = brand.id INNER JOIN scent ON product.scent = scent.id WHERE product.id IN " . $cartItems);

$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

$cartJSON = $result;

?>