/* Your Custom Javascript File here */
function changePolylangText() {
    const polylang = document.querySelector(" body > header > div.lg\\:flex.justify-end.items-center.hidden > div > li.lang-item.lang-item-3.lang-item-de.current-lang.lang-item-first > a");
    polylang.innerHTML +=  ' / ';
}

function changePolylangText2() {
    const menu_en = document.querySelector("body > header > div.lg\\:flex.justify-end.items-center.hidden > div > li.lang-item.lang-item-6.lang-item-en.current-lang > a");
    menu_en.innerHTML = ' / En ';
}

function showFullScreenMenu() {
    const hamburger = document.getElementById("show-menu");
    const menu = document.getElementById("full-screen-nav");
    const close = document.getElementById("close-menu");

    hamburger.addEventListener('click', function (event) {
        event.preventDefault();
        menu.classList.toggle('inactive');
    });

    close.addEventListener('click', function (event) {
        event.preventDefault();
        menu.classList.toggle('inactive');
    });
}

function showNewsLetterPopup() {
    const popup_de = document.getElementById("menu-item-31");
    const popup_en = document.getElementById("menu-item-35");
    const popup_object = document.getElementById("newsletter-popup");
    const close_newsleter = document.getElementById("close-newsletter");

    close_newsleter.addEventListener('click', function (event) {
        event.preventDefault();
        popup_object.classList.toggle('news-hide');
    });
    
    if( popup_de != null ) {
        popup_de.addEventListener('click', function (event) {
            event.preventDefault();
            popup_object.classList.toggle('news-hide');
        });
    }

    if( popup_en != null ) {
        popup_en.addEventListener('click', function (event) {
            event.preventDefault();
            popup_object.classList.toggle('news-hide');
        });
    }
}

function showCookiePopup() {
    const cookie_wrapper = document.getElementById("cookie-wrapper");
    const cookie_ok_button = document.getElementById("cookie-button");

    setTimeout( function() {
        cookie_wrapper.classList.toggle('hidden');
    }, 5000);

    cookie_ok_button.addEventListener('click', function (event) {
        event.preventDefault();
        cookie_wrapper.classList.toggle('hidden');
    });

}

function fireWhenReady(func) {
    document.addEventListener('DOMContentLoaded', func);
}

/* Call Function */
const polylang = document.querySelector(" body > header > div.lg\\:flex.justify-end.items-center.hidden > div > li.lang-item.lang-item-3.lang-item-de.current-lang.lang-item-first > a");
const menu_en = document.querySelector("body > header > div.lg\\:flex.justify-end.items-center.hidden > div > li.lang-item.lang-item-6.lang-item-en.current-lang > a");
const cookie =  document.getElementById("cookie-wrapper");

fireWhenReady(showFullScreenMenu);
fireWhenReady(showNewsLetterPopup);

if ( menu_en != null ) {
    fireWhenReady(changePolylangText2);
}

if ( polylang != null ) {
    fireWhenReady(changePolylangText);
}

if( cookie != null ) {
    fireWhenReady(showCookiePopup);
}