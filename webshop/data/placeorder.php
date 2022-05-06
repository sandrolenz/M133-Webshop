<?php

if (!isset($_SESSION)) {
    session_start();
}

require "dblink.php";

// -------------------------
// Place order
// -------------------------

if (!empty($_SESSION["cart"])) {
    $date = $_POST["date"];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $company = $_POST['company'];
    $country = $_POST['country'];
    $street = $_POST['street'];
    $plz = $_POST['plz'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $notes = $_POST['notes'];
    $totalprice = $_POST['totalprice'];

    $statement = $dblink->prepare("INSERT INTO orders VALUES (NULL, '$date', '$firstname', '$lastname', '$company', '$country', '$street', $plz, '$city', '$email', '$phone', '$notes', '$totalprice')");
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $orderid = $dblink->lastInsertId();

    foreach ($_SESSION['cart'] as $key => $value) {
        $statement1 = $dblink->prepare("INSERT INTO orders_products VALUES ($orderid, $value)");
        $statement1->execute();
        $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
    }

    exit("order-placed");
} else {
    exit("cart-empty");
}
