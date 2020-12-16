// COMPANYNAME ON LOAD
const phonename = document.querySelector(".phonename");

window.addEventListener('DOMContentLoaded', (slideLogo) => {
    console.log('DOM loaded');

    phonename.style.animation = `phonenameMove 0.5s ease forwards ${.6}s`;
    console.log('phonenameMove');

    visKollektion();
});

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

const kolnav = document.querySelector('.nav-links-kollektion');
const mainnav = document.querySelector('.nav-links-main');

const kollink = document.querySelector('.kollektion');
const mainKollDiv = document.querySelector('.col_kollektioner');
const mainOmDiv = document.querySelector('.col_om_karen');

const omKarenLink = document.querySelector('.om_karen');

//PopUp toggles Burger
// const burgerPop = document.querySelector('article');
// })

burger.addEventListener('click', () => {
    //Toggle Nav
    nav.classList.toggle('nav-active');

    //Animate Links (forEach går i gennem hvert link/Element)
    navLinks.forEach((link, index) => {
        if (link.style.animation) {
            //(hvis der allerede er en animation så fjernes den)
            link.style.animation = ''

            //REVERT BURGER TIL ORIGINAL
            kolnav.classList.add('none');
            mainnav.classList.remove('none');

            omKarenLink.addEventListener('click', () => {
                mainKollDiv.classList.add('none');
                mainOmDiv.classList.remove('none');

                visKollektion();
            })

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

function visKollektion() {
    kollink.addEventListener('click', () => {
        //Toggle mellem main Nav og kollektions nav
        kolnav.classList.toggle('none');
        mainnav.classList.toggle('none');

        //Toggle Om Karen / og Kollektion = block/none
        mainKollDiv.classList.remove('none');
        mainOmDiv.classList.add('none');
    });
}
//KOLLEKTIONS-NAVIGATION SLUTTER HER
