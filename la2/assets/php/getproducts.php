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
// Get all products
// -------------------------

$sql = "SELECT produkt.name, produkt.preis, geschmack.geschmack FROM produkt INNER JOIN geschmack ON produkt.fk_geschmack = geschmack.id";
foreach ($dblink->query($sql) as $row) {
    echo '<div id="item" class="centered">';
    echo "<b>".$row['name']."</b>&nbsp(".$row['geschmack'].")&nbspCHF ".$row['preis']."";
    echo "</div><br>";
}

?>