<?php
session_start();

$usernamePOST = $_POST['input_name'];
$passwdPOST = $_POST['input_passwd'];

$_SESSION["username"] = $usernamePOST;
$_SESSION["password"] = $passwdPOST;

header("Location: ../../page.php");
?>
