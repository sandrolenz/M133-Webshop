<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("Location: manage_products.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Anmelden | muffin.</title>
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
        <section class="shop">
            <div class="container">
                <div class="shop-checkout">
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <h2 class="checkout-title">Anmelden</h2>
                                <div class="form-wrapper">
                                    <div class="form-group">
                                        <label for="login-name">Benutzername*</label>
                                        <input id="login-name" type="text" autocomplete="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="login-passwd">Passwort*</label>
                                        <input id="login-passwd" type="password" autocomplete="current-password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-checkout">
                                <div class="submit-form">
                                    <button id="place-order" onclick="doLogin()">Anmelden</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
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
            function doLogin() {
                var name = $("#login-name").val();
                var passwd = $("#login-passwd").val();

                if (name != "" && passwd != "") {
                    $.ajax({
                        type: "POST",
                        url: "./data/dologin.php",
                        data: {
                            login_name: name,
                            login_passwd: passwd
                        },
                        success: function(data) {
                            if (data == "error") {
                                alert("Benutzer oder Passwort falsch!");
                            } else {
                                window.location.href = "./manage_products.php";
                            }
                        }
                    });
                } else {
                    alert("Bitte alle Felder ausfüllen!");
                }
            }
        </script>
    </div>
</body>

</html>