<?php

require "dblink.php";

// -------------------------
// Get all scents
// -------------------------

$statement = $dblink->prepare("SELECT id, name, country FROM brand");
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$brandsJSON = $result;

?>