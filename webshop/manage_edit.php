<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bearbeiten | muffin.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="baking, delivery, clean, clear, shop, shopping, muffin">
    <meta name="author" content="sandrolenz">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/custom_bootstrap.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="shortcut icon" href="assets/images/shortcut_logo.png">
</head>

<body>
    <div id="main">
        <header>
            <div class="header-wrapper">
                <div class="container">
                    <div class="header-menu">
                        <div class="row no-gutters align-items-center justify-content-center">
                            <div class="col-4 col-md-2">
                                <a class="logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                            </div>
                            <div class="col-8 col-md-8">
                                <div class="mobile-menu"><a href="#" id="showMenu"><i class="fas fa-bars"></i></a></div>
                                <nav class="navigation">
                                    <ul>
                                        <li class="nav-item"><a class="pisen-nav-link" href="index.html">Startseite</a></li>
                                        <li class="nav-item"><a class="pisen-nav-link active" href="shop_sidebar_3col.php">Shop</a></li>
                                        <li class="nav-item"><a class="pisen-nav-link" href="about_us.html">Über uns</a></li>
                                        <li class="nav-item"><a class="pisen-nav-link" href="contact.html">Kontakt</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-0 col-xl-2">
                                <div class="menu-function">
                                    <div id="search"><a href="shop_cart.php"><i class="fas fa-shopping-cart"></i></a></div>
                                    <div class="social-contact">
                                        <a href="https://www.github.com/sandrolenz/M133-Webshop" target="_blank"><i class="fab fa-github"></i></a>
                                        <a href="login.php"><i class="fas fa-user"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End header-->

        <?php require "data/getproducts.php" ?>
        
        <?php 
            require "data/getscents.php";
            $scents = "";

            foreach ($scentJSON as $key) {
                if ($productsJSON[0]["scent"] == $key["name"]) {
                    $scents = $scents . "<option value=" . $key["id"] . " selected>" . $key["name"] . "</option>";
                } else {
                    $scents = $scents . "<option value=" . $key["id"] . ">" . $key["name"] . "</option>";
                }
            };
            
            require "data/getbrands.php";
            $brands = "";
            
            foreach ($brandsJSON as $key) {
                if ($productsJSON[0]["brand"] == $key["name"]) {
                    $brands = $brands . "<option value=" . $key["id"] . " selected>" . $key["name"] . " (" . $key["country"] . ")</option>";
                } else {
                    $brands = $brands . "<option value=" . $key["id"] . ">" . $key["name"] . " (" . $key["country"] . ")</option>";
                }
            };
        ?>

        <div class="no-pd" id="content">
            <div class="container">
                <div class="shop-detail">
                    <div class="row">
                        <?php
                        foreach ($productsJSON as $key) {
                            echo '<div class="col-12 col-md-6">
                                <div class="shop-detail__image">
                                    <div class="slider slider-single">
                                        <div class="slider-single__item"><img src="assets/images/products/' . $key["id"] . '.png" alt="Product image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="shop-detail__content">
                                    <div class="shop-detail__content__top">
                                        <div class="form-wrapper">
                                            <div class="form-group">
                                                <label for="product-name">Produktename*</label>
                                                <input id="product-name" type="text" value="' . $key["name"] . '" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="product-price">Preis (in CHF)*</label>
                                                <input id="product-price" type="text" value="' . $key["price"] . '" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="product-description">Beschreibung*</label>
                                                <textarea id="product-description" type="text" required>' . $key["description"] . '</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="product-scent">Geschmack*</label>
                                                <select name="Geschmack" id="product-scent" required>' . $scents. '</select>
                                            </div>
                                            <div class="form-group">
                                                <label for="product-brand">Marke*</label>
                                                <select name="Marke" id="product-brand" required>' . $brands. '</select>
                                            </div>
                                            <div class="product-controller">
                                                <button class="normal-btn no-round" onclick="saveChanges(' . $key["id"] . ')"><a id="add-to-cart">Speichern</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        };
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--End shop-->
    <section class="instagram">
        <div class="container">
            <div class="instagram-posts">
                <a class="instagram-img_block" href="https://www.instagram.com/p/CdLTccosl0r" target="_blank"><img src="assets/images/instagram/1.png" alt="instagram post">
                    <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                        <p>Instagram</p>
                    </div>
                </a>
                <a class="instagram-img_block" href="https://www.instagram.com/p/CdLTa2tsCW0" target="_blank"><img src="assets/images/instagram/2.png" alt="instagram post">
                    <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                        <p>Instagram</p>
                    </div>
                </a>
                <a class="instagram-img_block" href="https://www.instagram.com/p/CdLTZlaMQLq" target="_blank"><img src="assets/images/instagram/3.png" alt="instagram post">
                    <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                        <p>Instagram</p>
                    </div>
                </a>
                <a class="instagram-img_block" href="https://www.instagram.com/p/CDLTW_bsTX2" target="_blank"><img src="assets/images/instagram/4.png" alt="instagram post">
                    <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                        <p>Instagram</p>
                    </div>
                </a>
                <a class="instagram-img_block" href="https://www.instagram.com/p/CdLTVclsdfl" target="_blank"><img src="assets/images/instagram/5.png" alt="instagram post">
                    <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                        <p>Instagram</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!--End instagram-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="footer-links">
                                <h5 class="footer-link--title">Informationen</h5>
                                <ul>
                                    <li><a class="footer-link" href="index.html">Startseite</a></li>
                                    <li><a class="footer-link" href="shop_sidebar_3col.php">Shop</a></li>
                                    <li><a class="footer-link" href="about_us.html">Über uns</a></li>
                                    <li><a class="footer-link" href="contact.html">Kontakt</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h5 class="footer-link--title">Kontakt</h5>
                                <div class="contact-method">
                                    <p>Ausstellungsstrase 70, 8005 Zürich</p>
                                    <p>sandro.lenz@edu.tbz.ch</p>
                                </div>
                                <div class="social-contact"><a class="icon-btn" href="https://www.github.com/sandrolenz/M133-Webshop" target="_blank"><i class="fab fa-github"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p class="copyright">© 2022 muffin.</p>
                </div>
            </div>
        </div>
    </footer>
    <!--End footer-->
    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/plyr.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/numscroller-1.0.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        function saveChanges(product) {
            // Validation
            var write = true;

            if ($("#product-name").val() == "" || $("#product-price").val() == "" || $("#product-description").val() == "" || $("product-scent").val() == "" || $("#product-brand").val() == "") {
                write = false;
                alert("Bitte füllen Sie alle Felder aus!");
                return
            }

            if (write == true) {
                jQuery.ajax({
                    type: "POST",
                    url: './data/updateproduct.php',
                    data: {
                        id: product,
                        name: $("#product-name").val(),
                        description: $("#product-description").val(),
                        price: $("#product-price").val(),
                        brand: $("#product-brand").val(),
                        scent: $("#product-scent").val()
                    },
                    success: function(data) {
                        alert(data)
                        window.location.href = "manage_products.php";
                    }
                });
            }
        }
    </script>

    </div>
</body>

</html>