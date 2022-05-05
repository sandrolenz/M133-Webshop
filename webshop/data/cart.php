<?php

if (!isset($_SESSION)) {
    session_start();
}

// -- DB Connection --

$dbname = 'm133_webshop';
$dbuser = 'm133_fritz';
$dbpassword = 'aDQBiW4K1JfQXxuM';

try {
    $dblink = new PDO('mysql:host=localhost;dbname=' . $dbname, $dbuser, $dbpassword);
    // echo 'Connection successfully';
} catch (PDOException $exception) {
    echo 'Connection failed: ' . $exception->getMessage();
}

// -------------------

if (isset($_POST["action"])) {
    $action = $_POST["action"];
} else {
    $action = "read";
}

if (isset($_POST["product"])) {
    $product = $_POST["product"];
} else {
    $product = "";
}

switch ($action) {
    case 'read':
        if (isset($_SESSION['cart'])) {
            $cartItems = "(" . implode(",", $_SESSION['cart']) . ")";

            $statement = $dblink->prepare("SELECT product.id, product.name, product.description, product.price, brand.name AS brand, brand.country, scent.name AS scent FROM product INNER JOIN brand ON product.brand = brand.id INNER JOIN scent ON product.scent = scent.id WHERE product.id IN " . $cartItems);
            // $statement1 = $dblink->prepare("SELECT SUM(price) AS totalprice FROM product WHERE id IN " . $cartItems);

            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

            // $statement1->execute();
            // $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);

            $cartJSON = $result;
            // $_SESSION["totalprice"] = var_dump($result1);
        } else {
            $cartJSON = [];
        }

        break;

    case 'add':
        // Create cart if it doesn't exist
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Push product to cart array
        array_push($_SESSION['cart'], $product);
        exit("added");

    case 'remove':
        // Remove product from cart array
        if (($key = array_search($product, $_SESSION['cart'])) !== false) {
            unset($_SESSION['cart'][$key]);
        }
        exit("removed");

    case 'clear':
        // Remove all products from cart array
        $_SESSION['cart'] = array();
        exit("cleared");

    default:
        exit("No action specified.");
}
