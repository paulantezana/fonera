'use strict';

/**
 * Created by Paul Antezana on 12/03/2017.
 */
var toogleMenu = document.getElementById('toogleMenu'),
    menu = document.getElementById('main-menu');
toogleMenu.addEventListener('click', function () {
    menu.classList.toggle('menu-toggle');
    toogleMenu.classList.toggle('toggleCros');
});

function gridLayout() {
    var elem = document.querySelector('.advertising-container');
    if (elem != null) {
        var msnry = new Masonry(elem, {
            itemSelector: '.advertising-container',
            columnWidth: 200
        });
        var msnry = new Masonry('.advertising-container', {
            gutter: 10
        });
    }
}
function externalLinksLayayout() {
    var elem = document.querySelector('.externalLinks-container');
    if (elem != null) {
        var msnry = new Masonry(elem, {
            // options
            itemSelector: '.externalLinks-container',
            columnWidth: 200
        });
        var msnry = new Masonry('.externalLinks-container', {
            gutter: 10
        });
    }
}
externalLinksLayayout();
gridLayout();
setTimeout(function () {
    gridLayout();externalLinksLayayout();
}, 2000);
setTimeout(function () {
    gridLayout();externalLinksLayayout();
}, 10000);