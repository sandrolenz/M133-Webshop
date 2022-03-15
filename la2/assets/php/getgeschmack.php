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

$sql = "SELECT * FROM geschmack";
foreach ($dblink->query($sql) as $row) {
    echo '<option value="'.$row['id'].'">'.$row['geschmack'].'</option>';
}

?>