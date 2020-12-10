// COMPANYNAME ON LOAD
const phonename = document.querySelector(".phonename");

window.addEventListener('DOMContentLoaded', (slideLogo) => {
    console.log('DOM loaded');

    phonename.style.animation = `phonenameMove 0.5s ease forwards ${.6}s`;
    console.log('phonenameMove');

});

//SPLASH IMAGE CHANGE

var images = [],
    x = 0;
images[0] = "assets/splash/outside_light_gradient.png";
images[1] = "assets/splash/outside_light.png";
images[2] = "assets/splash/outside_dark_side.jpg";
images[3] = "assets/splash/karen-lolk-05zfcymXeD6yFq2MnebUcw.jfif";
setInterval("changeImage()", 10000);
var x = 0;

changeImage();

function changeImage() {
    var img = document.getElementById("splashsrc");
    img.src = images[x];
    x++;
    if (x >= images.length) {
        x = 0;
    }
    fadeImg(img);
    setTimeout("changeImage()", 10000);
}

function fadeImg(img) {
    console.log("fadeMe");

    img.classList.add(".fadeIn10");
}

const lang = document.querySelector("#language");

lang.addEventListener("click", () => {
    console.log("Clicked flag");

    const langDK = document.querySelector(".langDK");
    const langUK = document.querySelector(".langUK");

    if (langDK.classList.contains('block')) {

        langDK.classList.toggle('block');
        langUK.classList.toggle('none');

    } else {
        langDK.classList.toggle('none');
        langUK.classList.toggle('block');
    }
})

//NAVIGATION STARTER HER
const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');
const navLinks = document.querySelectorAll('.nav-links li');

burger.addEventListener('click', () => {
    //Toggle Nav
    nav.classList.toggle('nav-active');

    //Animate Links (forEach går i gennem hvert link/Element)
    navLinks.forEach((link, index) => {
        if (link.style.animation) {
            //(hvis der allerede er en animation så fjernes den)
            link.style.animation = ''
        } else {
            //(hvis der ikke er en animation, så tilføjes den
            link.style.animation = `navLinkFade 0.5s ease forwards ${(index / 15)+.3}s`;
        }
    });
    //Burger Animation (her fjernes eller påsættes toggle-klassen fra css)
    burger.classList.toggle('toggle');
});

//NAVIGATION SLUTTER HER

//KOLLEKTIONS-NAVIGATION STARTER HER
const kolnav = document.querySelector('.nav-links-kollektion');
const mainnav = document.querySelector('.nav-links-main');
const kollink = document.querySelector('.kollektion');

kollink.addEventListener('click', () => {
    //Toggle Nav
    kolnav.classList.toggle('none');
    mainnav.classList.toggle('none');

});
//KOLLEKTIONS-NAVIGATION SLUTTER HER
