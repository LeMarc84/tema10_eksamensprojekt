// const submitSend = document.querySelector("submit");

// submitSend.addEventListener('click', () => {
//     const dimForm = document.querySelector(".formblock");
//     dimForm.classList.add('fadeOut');
//     const formTak = document.querySelector(".main-top-tak");
//     formTak.classList.add('block');
//     const mainTopHide = document.querySelector(".main-top");
//     mainTopHide.classList.add('none');
// })

// const settings = {
//     "async": true,
//     "crossDomain": true,
//     "url": "https://google-translate1.p.rapidapi.com/language/translate/v2/languages",
//     "method": "GET",
//     "headers": {
//         "accept-encoding": "application/gzip",
//         "x-rapidapi-key": "2834849f02msh76b51a984ecbe81p13f622jsn2b44f4421b1a",
//         "x-rapidapi-host": "google-translate1.p.rapidapi.com"
//     }
// };

// $.ajax(settings).done(function(response) {
//     console.log(response);
// });

window.addEventListener('scroll', () => {
    const arrow = document.querySelector(".arrow_down");
    arrow.classList.add('fadeOut');
})

const phonename = document.querySelector(".phonename");

window.addEventListener('DOMContentLoaded', () => {
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

//FÅ MENU TIL AT LUKKE VED KLIK PÅ LOOP ELEMENTER DER POPPER OP

const loopClick = document.querySelector('.list');

loopClick.addEventListener('click', () => {

    //Spørg om window er under 800px
    if ($(window).width() < 800) {
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
    }
});

// KILL POPUP HVIS DER KLIKKES PÅ MENUEN IGEN
// const popupLuk = document.querySelector("#popup");
// const nav = document.querySelector('.nav-links');

// nav.addEventListener('click', () => {
//     if (popupLuk.classList.contains('block')) {
//         popupLuk.classList.add = ('none');
//     }
// });
