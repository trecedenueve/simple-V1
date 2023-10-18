/*BOTON DE SUBIR ARRIBA */
  (function( $ ) {
	'use strict';
    
    $('#scrolltop').hide();

    $(window).scroll(function(){
        if ($(this).scrollTop() < 200) {
            $('#scrolltop').fadeOut();
        } else {
            $('#scrolltop').fadeIn();
        }
    });
    
    $('#scrolltop').on('click', function(){
        $('html, body').animate({scrollTop:0}, 'fast');
        return false;
    });

})( jQuery );

//MENU HAMBURGUESA
const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})

