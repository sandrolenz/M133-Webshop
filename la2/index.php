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

<?php require "./assets/php/getgeschmack.php" ?>
<?php require "./assets/php/getproducts.php" ?>

<body>
    <div class="centered" id="title">
        <h1>PHP-Webinterface</h1>
    </div>

    <div class="vertical-spacer"></div>

    <h3 class="centered">Neues Produkt</h3>
    <div class="centered" id="new-product">
        <input type="text" placeholder="Name" id="input_name" required>
        <br>&nbsp<br>
        <select name="Geschmack" id="input_geschmack" required>
            <?php
                foreach ($geschmackJSON as $key) {
                    echo "<option value=".$key["id"].">".$key["geschmack"]."</option>";
                } 
            ?>
        </select>
        <br>&nbsp<br>
        <input type="number" placeholder="Preis" id="input_preis" required>
        <br>&nbsp&nbsp&nbsp<br>
        <button type="submit" value="Submit" onclick="addProduct()">Hinzufügen</button>
    </div>

    <div class="vertical-spacer"></div>

    <h3 class="centered">Aktuelle Produkte</h3>
    <div id="product-list">
        <?php
            foreach ($produkteJSON as $key) {
                echo '<div id="item" class="centered"><b>'.$key["name"].'</b>&nbsp('.$key["geschmack"].'&nbspCHF '.$key["preis"].'</div>';
            }
        ?>
    </div>

    <div class="vertical-spacer"></div>

    <div class="centered" id="footer">
        <img src="./assets/icon.png" width="10%">
        <br>
        <small>© 2022 - Sandro Lenz</small>
    </div>

    <script type="text/javascript">
        // get & display products
        jQuery.ajax({
            type: "GET",
            url: './assets/php/getproducts.php',
            success: function(data) {
                var test = data;
                document.getElementById("product-list").innerHTML = test;
            }
        });

        // function to add products
        function addProduct() {
            // validation
            var write = true;

            if ($("#input_name").val() == "" || $("#input_preis").val() == "") {
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
                        // added to db - reload to redo getproducts.php
                        location.reload()
                    }
                });
            };
        }
    </script>
</body>

</html>