<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEA 2. Semester eksamesprojekt</title>
    <!-- Css -->
    <link rel="stylesheet" href="css/globalstyle.css">
    <link rel="stylesheet" href="css/kontakt.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=BioRhyme&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons//favicon-16x16.png">
    <link rel="manifest" href="assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#000000">
</head>

<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v9.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/da_DK/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Chat Plugin code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="210662805806914" theme_color="#7646ff" greeting_dialog_delay="10" greeting_dialog_display="fade" logged_in_greeting="Hej, ka' jeg hjælpe dig? :)  Mvh Karen" logged_out_greeting="Hej, ka' jeg hjælpe dig? :)  Mvh Karen">
    </div>
    <!-- splash -->
    <section id="splash" class="trans_grad_bottom">
        <div class="splash_container">
            <img class='photo' src="assets/splash/Karen1.jpg" alt="Image 1" />
            <img class='photo' src="assets/splash/Karen3.jpg" alt="Image 2" />
            <img class='photo' src="assets/splash/Karen4.jpg" alt="Image 3" />
            <img class='photo' src="assets/splash/Karen2.jpg" alt="Image 4" />
            <img class='photo' src="assets/splash/Karen5.jpg" alt="Image 5" />
        </div>
    </section>
    <header>
        <nav>
            <div id="arrow_down" class="arrow_down down">
                <a href="#main"><b class="arrow"></b></a>
            </div>
            <ul class="nav-links">
                <div class="nav-links-main">
                    <div class="kollektion">
                        <li>
                            <a href="#kollektion">Kollektioner</a>
                        </li>
                    </div>
                    <div class="kontakt">
                        <li>
                            <a href="kontakt.php">Kontakt</a>
                        </li>
                    </div>
                    <div class="om_karen">
                        <li class="om_karen">
                            <a href="#om">Om Karen</a>
                        </li>
                    </div>
                </div>
                <div class="nav-links-kollektion none">
                    <div class="alle">
                        <li>
                            <!-- <b class="left valgt">◀</b> -->
                            <a href="#kollektion" class="filter valgt" data-element="alle"> Alle</a>
                        </li>
                    </div>
                    <div class="kjoler">
                        <li>
                            <!-- <b class="left none">◀</b>  -->
                            <a href="#kollektion" class="filter" data-element="2">Kjoler</a>
                        </li>
                    </div>
                    <div class="nederdele">
                        <li>
                            <!-- <b class="left none">◀</b>  -->
                            <a href="#kollektion" class="filter" data-element="3">Nederdele</a>
                        </li>
                    </div>
                    <div class="bukser">
                        <li>
                            <!-- <b class="left none">◀</b>  -->
                            <a href="#kollektion" class="filter" data-element="4">Bukser</a>
                        </li>
                    </div>
                    <div class="overtoej">
                        <li>
                            <!-- <b class="left none">◀</b>  -->
                            <a href="#kollektion" class="filter" data-element="5">Overtøj</a>
                        </li>
                    </div>
                    <div class="kimonos">
                        <li>
                            <!-- <b class="left none">◀</b>  -->
                            <a href="#kollektion" class="filter" data-element="6">Kimonos</a>
                        </li>
                    </div>
                    <div class="t-shirts">
                        <li>
                            <!-- <b class="left none">◀</b>  -->
                            <a href="#kollektion" class="filter" data-element="7">T-shirts</a>
                        </li>
                    </div>
                    <div class="accessories">
                        <li>
                            <!-- <b class="left none">◀</b>  -->
                            <a href="#kollektion" class="filter" data-element="8">Accessories</a>
                        </li>
                    </div>
                    <div class="unisex">
                        <li>
                            <!-- <b class="left none">◀</b>  -->
                            <a href="#kollektion" class="filter" data-element="9">Unisex</a>
                        </li>
                    </div>
                </div>
            </ul>
            <div id="logo">
                <div>
                    <a href="index.html"><img src="assets/logo/karencopenhagenLogoTransparent1100x1100.png" class="logo2" alt="logo Transparent"></a>
                </div>
            </div>
            <div class="phonename">
                <p>Copenhagen Design</p>
            </div>
            <div id="icons">
                <div id="language">
                    <img src="assets/icons/DA_active_v2.png" class="langDK" alt="flag dk">
                    <img src="assets/icons/EN_active_v2.png" class="langUK none" alt="flag uk">
                </div>
                <div id="shoppingcart">
                    <img src="assets/icons/shopping-cart-white.png" class="cart" alt="Shoppingcart">
                </div>
            </div>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>


    <!-- popup -->
    <section id="popup">
        <article>
            <div id="luk">
            <a href="index.html">
                <button> x </button>
                  </div>
        <div class="main-top">
            <h1 style="text-align: center">KONTAKT</h1>
            <p>Udfyld formularen, så vender jeg tilbage hurtigst muligt. :)</p>
            <img src="assets/pics/kontakt.PNG" class="" alt="kontakt">
        </div>

        <div class="main-form">
            <div class="container formblock">
                <form action="http://nobisnet.dk/cgi-bin/FormMail.pl" method="POST" accept-charset="ISO-8859-1" onsubmit="var originalCharset = document.charset; document.charset = 'ISO-8859-1'; window.onbeforeunload = function () {document.charset=originalCharset;};">

                    <label for="name"><p>* Navn</p></label>
                    <input type="text" id="name" name="name" placeholder="Dit smukke navn her...">

                    <label for="email"><p>* e-mail</p></label>
                    <input type="text" id="email" name="email" placeholder="Skriv din vilde e-mail her...">

                    <label for="emne"><p>* Vælg et emne her</p></label>
                    <select id="emne" name="emne">
                        <option value="priser">Priser</option>
                        <option value="kollektioner">Kollektioner</option>
                        <option value="studierabat">Studierabat</option>
                        <option value="custom_kreation">Din kreation</option>
                        <option value="andet">Andet</option>
                    </select>

                    <label for="message"><p>* Besked</p></label>
                    <textarea id="message" name="message" placeholder="Skriv noget hyggeligt her..." style="height:180px"></textarea>

                    <input type="submit" value="Afsend">
                    <input type="reset" value="Slet indhold">

                    <input type="hidden" name="recipient" value="morten@nobisnet.dk"/>

                </form>
            </div>
        </div>
        </article>
    </section>

    <!-- SOME -->
    <section id="some" class="">
        <div class="some_wrapper">
            <div class="some_box some_header">
                <h1 id="some_h1">Fang mig på sociale medier</h1>
            </div>
            <div class="some_box content_l">
                <div class="some_icon">
                    <a href="tel:004552199088">
                        <img src="assets/icons/viber@8x.png" alt="Call img"><b>+45 5219 9088</b></a>
                </div>
            </div>
            <div class="some_box content_lft">
                <div class="some_icon">
                    <a href="https://www.instagram.com/karencopenhagen/" target="blank">
                        <img src="assets/icons/instagram@8x.png" alt="Insta img"><b>INSTAGRAM</b>
                    </a>
                </div>
            </div>
            <div class="some_box content_center">
                <div class="some_icon">
                    <a href="https://www.facebook.com/karencopenhagendesign" target="blank">
                        <img src="assets/icons/facebook@8x.png" alt="Face img"><b>FACEBOOK</b>
                    </a>
                </div>
            </div>
            <div class="some_box content_rgt">
                <div class="some_icon">
                    <a href="mailto:vintage@karen-copenhagen.dk" target="blank">
                        <img src="assets/icons/at@8x.png" alt="Mail img"><b>E-MAIL</b>
                    </a>
                </div>
            </div>
            <div class="some_box content_r">
                <div class="some_icon">
                    <a href="https://www.google.com/maps/place/Rantzausgade+%26+Brohusgade,+2200+K%C3%B8benhavn,+Danmark/@55.6872581,12.5454141,17z/data=!3m1!4b1!4m5!3m4!1s0x465253af207fd6d1:0xb4bfe1859e0145cd!8m2!3d55.6872551!4d12.5476028" target="blank" ;>
                        <img src="assets/icons/map-marker@8x.png" alt="Map img"><b>GOOGLE MAPS</b></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="cvr">
            <p>CVR: 35772332</p>
        </div>
        <p>KEA MMD E2020 Grp.02 ©</p>
    </footer>
    <!-- Script -->
    <script src="script/globalscript.js"></script>
</body>

</html>
