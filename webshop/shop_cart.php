<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
    <meta name="author" content="PISEN | Deer Creative Theme">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/custom_bootstrap.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/elegant.css">
    <link rel="stylesheet" href="assets/css/plyr.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/animate.css">
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
                                    <div id="search"><a class="search-btn" href="#"><i class="fas fa-search"></i></a></div>
                                    <div class="social-contact"><a href="https://www.github.com/sandrolenz/M133-Webshop" target="_blank"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </header>
        <!--End header-->

        <?php require "./data/getproducts.php" ?>

        <section class="shop">
            <div class="container">
                <div class="shop-cart">
                    <div class="cart-table">
                        <table class="table table-responsive">
                            <colgroup>
                                <col span="1" style="width: 15%">
                                <col span="1" style="width: 30%">
                                <col span="1" style="width: 15%">
                                <col span="1" style="width: 15%">
                                <col span="1" style="width: 15%">
                                <col span="1" style="width: 10%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="product-image" scope="col">Bild</th>
                                    <th class="product-name" scope="col">Produkt</th>
                                    <th class="product-price" scope="col">Preis</th>
                                    <th class="product-quantity" scope="col">Anzahl</th>
                                    <th class="product-total" scope="col">Total</th>
                                    <th class="product-clear" scope="col">
                                        <button class="no-round-btn"><i class="icon_close"></i></button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($productsJSON as $key) {
                                    echo '<tr>
                                        <td class="product-image">
                                            <div class="img-wrapper"><img src="assets/images/products/' . $key["id"] . '.png" alt="product image"></div>
                                        </td>
                                        <td class="product-name">' . $key["name"] . '</td>
                                        <td class="product-price">CHF ' . $key["price"] . '</td>
                                        <td class="product-quantity">
                                            <div class="quantity-control"><a class="control-btn minus" href="">-</a>
                                                <input class="quantity no-round-input" type="text" min="1" value="1"><a class="control-btn plus" href="">+</a>
                                            </div>
                                        </td>
                                        <td class="product-total">CHF ' . $key["price"] . '</td>
                                        <td class="product-clear">
                                            <button class="no-round-btn"><i class="icon_close"></i></button>
                                        </td>
                                    </tr>';
                                };
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-action">
                        <div class="row justify-content-between">
                            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                                <div class="cart-function_block">
                                    <div class="button-group"><a class="back-to-shop normal-btn" href="shop_sidebar_3col.html">Weiter einkaufen</a><a class="mr-0 update-cart normal-btn" href="shop_cart.html">Warenkorb aktualisieren</a></div>
                                    <div class="discount">
                                        <h2>Rabattcode</h2>
                                        <form action="">
                                            <input type="text">
                                            <button>Anwenden</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 col-lg-4">
                                <div class="cart-total">
                                    <table class="table">
                                        <colgroup>
                                            <col span="1" style="width: 70%">
                                            <col span="1" style="width: 30%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="total--title">Total</td>
                                                <td class="total">
                                                    <script>
                                                        var totalprice = 0;
                                                        Array.from(document.getElementsByClassName("product-total")).forEach(
                                                            function(element, index, array) {
                                                                if (index != 0) {
                                                                    console.log(element.innerHTML.split(" ")[1]);
                                                                    totalprice = totalprice + parseFloat(element.innerHTML.split(" ")[1]);
                                                                    console.log(totalprice);
                                                                }
                                                            }
                                                        );
                                                        document.write("CHF " + totalprice);
                                                    </script>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><a href="shop_checkout.php">KAUFEN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End shop-->
        <section class="instagram">
            <div class="container">
                <div class="instagram-posts">
                    <a class="instagram-img_block" href="https://www.instagram.com/" target="_blank"><img src="assets/images/instagram/1.png" alt="instagram post">
                        <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                            <p>Instagram</p>
                        </div>
                    </a>
                    <a class="instagram-img_block" href="https://www.instagram.com/" target="_blank"><img src="assets/images/instagram/2.png" alt="instagram post">
                        <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                            <p>Instagram</p>
                        </div>
                    </a>
                    <a class="instagram-img_block" href="https://www.instagram.com/" target="_blank"><img src="assets/images/instagram/3.png" alt="instagram post">
                        <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                            <p>Instagram</p>
                        </div>
                    </a>
                    <a class="instagram-img_block" href="https://www.instagram.com/" target="_blank"><img src="assets/images/instagram/4.png" alt="instagram post">
                        <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                            <p>Instagram</p>
                        </div>
                    </a>
                    <a class="instagram-img_block" href="https://www.instagram.com/" target="_blank"><img src="assets/images/instagram/5.png" alt="instagram post">
                        <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                            <p>Instagram</p>
                        </div>
                    </a>
                    <a class="instagram-img_block" href="https://www.instagram.com/" target="_blank"><img src="assets/images/instagram/3.png" alt="instagram post">
                        <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                            <p>Instagram</p>
                        </div>
                    </a>
                    <a class="instagram-img_block" href="https://www.instagram.com/" target="_blank"><img src="assets/images/instagram/2.png" alt="instagram post">
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
                        <p class="copyright">© 2022 Pisen Webshop</p>
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
    </div>
</body>

</html>