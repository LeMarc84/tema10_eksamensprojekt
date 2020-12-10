<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. Semester eksamesprojekt</title>
    <!-- Css -->
    <link rel="stylesheet" href="css/globalstyle.css">
    <link rel="stylesheet" href="css/kontakt.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Quicksand:wght@500&display=swap" rel="style">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
</head>

<body>
    <!-- splash -->
    <section id="splash" class="">
        <img src="assets/splash/karen-lolk-05zfcymXeD6yFq2MnebUcw.jfif" class="splashback">
        <img id="splashsrc" src="assets/splash/karen-lolk-05zfcymXeD6yFq2MnebUcw.jfif" class="splashimg fadeIn10">

        <!-- Header + Nav -->
        <header>
            <div id="logo">
                <a href="index.html"><img src="assets/logo/karen_badge_trans_nocircle.png" class="logo1 none" alt="logo"></a>
                <a href="index.html"><img src="assets/logo/karencopenhagenLogoTransparent1100x1100.png" class="logo2" alt="logo Transparent"></a>
            </div>
            <nav>
                <ul class="nav-links">
                    <div class="kollektion">
                        <li>
                            <a href="index.html#kollektion">Kollektioner</a>
                        </li>
                    </div>
                    <div class="kontakt">
                        <li>
                            <a href="kontakt.php">Kontakt</a>
                        </li>
                    </div>
                    <div class="om_karen">
                        <li class="om_karen">
                            <a href="index.html#om">Om Karen</a>
                        </li>
                    </div>
                </ul>
                <div class="phonename">
                    <p>Copenhagen Design</p>
                </div>
                <div id="icons">
                    <div id="shoppingcart">
                        <img src="assets/icons/shopping-cart-white.png" class="cart" alt="Shoppingcart">
                    </div>
                    <div id="language">
                        <img src="assets/flag/dk.png" class="langDK" alt="flag dk">
                        <img src="assets/flag/uk.png" class="langUK none" alt="flag uk">
                    </div>
                </div>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
        </header>
    </section>

    <!-- popup -->
    <section id="popup">
        <article>
            <div id="luk">
            <a href="index.html">
                <button> x </button>
                </a>
            </div>

        <div class="main-top">
            <h1 style="text-align: center">KONTAKT</h1>
            <p>Udfyld formularen, så vender jeg tilbage hurtigst muligt.</p>
            <img src="assets/pics/kontakt.PNG" class="" alt="kontakt">
        </div>

        <div class="main-form">
            <div class="container">
                <form action="http://selya.dk/cgi-bin/FormMail.pl" method="POST" accept-charset="ISO-8859-1" onsubmit="var originalCharset = document.charset; document.charset = 'ISO-8859-1'; window.onbeforeunload = function () {document.charset=originalCharset;};">

                    <label for="name">* Dit fulde navn</label>
                    <input type="text" id="name" name="name" placeholder="Dit navn her...">

                    <label for="email">* e-mail</label>
                    <input type="text" id="email" name="email" placeholder="Skriv din e-mail her...">

                    <label for="emne">* Emne</label>
                    <select id="emne" name="emne">
                        <option value="priser">Priser</option>
                        <option value="kollektioner">Kollektioner</option>
                        <option value="studierabat">Studierabat</option>
                        <option value="custom_kreation">Din kreation</option>
                        <option value="andet">Andet</option>
                    </select>

                    <label for="message">* Besked</label>
                    <textarea id="message" name="message" placeholder="Skriv noget hyggeligt her..." style="height:180px"></textarea>

                    <input type="submit" value="Afsend">
                    <input type="reset" value="Slet indhold">

                    <input type="hidden" name="recipient" value="karencopenhagen@selya.dk" />

                </form>
            </div>
        </div>
        </article>
    </section>

    <!-- SOME -->
    <section id="some" class="none">
        <div class="some_left">
            <div class="txt">
                <p></p>
            </div>
        </div>
        <div class="some_center">
            <div class="fb">
                <img src="assets/some/facebook.png" alt="Facebook SoMe img">
            </div>
            <div class="insta">
                <img src="assets/some/instagram.png" alt="Instagram SoMe img">
            </div>
        </div>
        <div class="some_right">
            <div class="txt">
                <p>MaiL: <br> <a class="inlinelink" href="mailto:KARENSKJOLER@GMAIL.COM">karenskjoler@gmail.com</a><br>
                </p>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <p>KEA MMD E2020 Grp.02 ©</p>
    </footer>

    <!-- Script -->
    <script src="script/globalscript.js"></script>
    <script src="script/looppop.js"></script>
</body>

</html>
