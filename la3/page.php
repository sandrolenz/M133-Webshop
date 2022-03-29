<?php 
    session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M133 Login</title>
    <link rel="stylesheet" type="text/css" href="./assets/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" type="icon/png" href="./assets/icon.png">
</head>

<body>
    <div class="centered" id="title">
        <h1>PHP-Webinterface</h1>
    </div>

    <div class="vertical-spacer"></div>

    <h3 class="centered">Ihr Benutzer:</h3>
    <a class="centered">Angemeldet als&nbsp<b><?php echo $_SESSION["username"] ?></b></a>
    <a class="centered">Ihr Passwort lautet&nbsp<b><?php echo $_SESSION["password"] ?></b></a>

    <div class="vertical-spacer"></div>

    <div class="vertical-spacer"></div>
    <div class="centered" id="footer">
        <img src="./assets/icon.png" width="10%">
        <br>
        <small>© 2022 - Sandro Lenz</small>
    </div>
</body>

</html>