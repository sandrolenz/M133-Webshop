<?php 

session_start();

$product = $_POST["product"];

// Create cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Push product to cart array
array_push($_SESSION['cart'], $product);

exit($product);

?>