<?php

require "dblink.php";

// -------------------------
// Get all scents
// -------------------------

$statement = $dblink->prepare("SELECT id, name FROM scent");
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$scentJSON = $result;

?>