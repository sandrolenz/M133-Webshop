<?php
session_start();

$usernamePOST = $_POST['input_name'];
$passwdPOST = $_POST['input_passwd'];

$_SESSION["username"] = $usernamePOST;
$_SESSION["password"] = $passwdPOST;

$username = $_SESSION["username"];
$password = $_SESSION["password"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M133 Login</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" type="icon/png" href="../icon.png">
</head>

<body>
    <div class="centered" id="title">
        <h1>PHP-Webinterface</h1>
    </div>

    <div class="vertical-spacer"></div>

    <h3 class="centered">Ihr Benutzer:</h3>
    <a class="centered">Angemeldet als&nbsp<b><?php echo $username ?></b></a>
    <a class="centered">Ihr Passwort lautet&nbsp<b><?php echo $password ?></b></a>

    <div class="vertical-spacer"></div>

    <div class="vertical-spacer"></div>
    <div class="centered" id="footer">
        <img src="../icon.png" width="10%">
        <br>
        <small>© 2022 - Sandro Lenz</small>
    </div>
</body>

</html>