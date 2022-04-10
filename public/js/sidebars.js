/* global bootstrap: false */
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()

function toggleMenu()
{
    let menu = document.getElementById('menu-bar');
    if ( menu.classList.contains('d-none') ){
        menu.classList.add('d-flex');
        menu.classList.remove('d-none');
    }else{
        menu.classList.remove('d-flex');
        menu.classList.add('d-none');
    }
}
