<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M133 Lernaufgabe 2</title>
    <link rel="stylesheet" type="text/css" href="./assets/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" type="icon/png" href="./assets/icon.png">
</head>

<body>
    <div class="centered" id="title">
        <h1>muffinshop Webinterface</h1>
    </div>

    <div class="vertical-spacer"></div>

    <h3 class="centered">Neues Produkt</h3>
    <div class="centered" id="new-product">
        <input type="text" placeholder="Name" id="input_name" required>
        <br>&nbsp<br>
        <select name="Geschmack" id="input_geschmack" required>
            <option value="1">banane</option>
            <option value="2">schokolade</option>
            <option value="3">erdbeer</option>
            <option value="4">zitrone</option>
        </select>
        <br>&nbsp<br>
        <input type="number" placeholder="Preis" id="input_preis" required>
        <br>&nbsp&nbsp&nbsp<br>
        <button type="submit" value="Submit" onclick="addProduct()">Hinzufügen</button>
    </div>

    <div class="vertical-spacer"></div>

    <h3 class="centered">Aktuelle Produkte</h3>
    <div id="product-list">
        <?php require "./assets/php/getproducts.php" ?>
    </div>

    <script type="text/javascript">
        function addProduct() {
            // validation
            var write = true;
            
            if($("#input_name").val() == "" || $("#input_preis").val() == "") {
                write = false;
                alert("Bitte füllen Sie alle Felder aus!");
                return
            } else {
                // add to database
                jQuery.ajax({
                    type: "POST",
                    url: './assets/php/addproduct.php',
                    data: {
                        name: $("#input_name").val(),
                        geschmack: $("#input_geschmack").val(),
                        preis: $("#input_preis").val()
                    },
                    success: function(data) {
                        // added to db
                        location.reload()
                    }
                });
            };
        }
    </script>
</body>

</html>