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

    <h3 class="centered">Login</h3>
    <div class="centered" id="login">
        <input type="text" placeholder="Benutzername" id="login_name" name="login_name" required> &nbsp;&nbsp;
        <input type="text" placeholder="Passwort" id="login_passwd" name="login_passwd" required> &nbsp;&nbsp;
        <button type="submit" value="Submit" onclick="login()">Anmelden</button>
    </div>

    <div class="vertical-spacer"></div>
    <div class="vertical-spacer"></div>
    <div class="vertical-spacer"></div>
    <div class="vertical-spacer"></div>
    
    <div class="centered" id="footer">
        <img src="./assets/icon.png" width="10%">
        <br>
        <small>© 2022 - Sandro Lenz</small>
    </div>
</body>

<script>
    function login() {
        var name = $("#login_name").val();
        var passwd = $("#login_passwd").val();

        if (name != "" && passwd != "") {
            $.ajax({
                type: "POST",
                url: "./assets/php/login.php",
                data: {
                    login_name: name,
                    login_passwd: passwd
                },
                success: function(data) {
                    if (data == "error") {
                        alert("Benutzer oder Passwort falsch!");
                    } else {
                        window.location.href = "./page.php";
                    }
                }
            });
        } else {
            alert("Bitte alle Felder ausfüllen!");
        }
    }
</script>

</html>