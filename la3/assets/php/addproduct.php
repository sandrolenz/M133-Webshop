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
// Add new product
// -------------------------

$name = $_POST["name"];
$preis = $_POST["preis"];
$geschmack = $_POST["geschmack"];

// $sql = "INSERT INTO `produkt` (`id`, `name`, `preis`, `fk_geschmack`) VALUES (NULL, '$name', '$preis', '$geschmack')";
// $dblink->query($sql);

$statement = $dblink->prepare("INSERT INTO `produkt` (`id`, `name`, `preis`, `fk_geschmack`) VALUES (NULL, ?, ?, ?)");
$statement->execute(array($name, $preis, $geschmack));
while($row = $statement->fetch()) {
   // Product added 
}

?>