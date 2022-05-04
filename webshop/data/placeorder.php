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
// Place order
// -------------------------

$userid = $_POST['userid'];
$date = getdate();
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

$statement = $dblink->prepare("INSERT INTO order VALUES (NULL, $userid, $date, $firstname, $lastname, $company, $country, $street, $plz, $city, $email, $phone, $notes, $totalprice)");
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$productsJSON = $result;

?>