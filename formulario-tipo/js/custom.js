$(function() {

  
  // 01. steps

  $('.step-modal-link, .overlay-mobile').on('click', function(e) {
    
    e.preventDefault();
    $(this).closest(".Steps--tipo").toggleClass('is-visible');

  });

  
// 02. Menú contextual

$(".link-tool-contextual-menu").click(function(e) {


  e.preventDefault();

  console.info('click');

  //var target = $(this).data('target');
  var target = $(this).next(".tool-contextual-menu");

  var opcionesMenu = target;
  var linkMenu = $(this);
  var estaAbierto = linkMenu.hasClass("abierto");
  
  // Ocultar cualquier otro menú contextual que esté abierto
  $(".tool-contextual-menu.abierto").hide();
  opcionesMenu.removeClass("abierto");
  linkMenu.removeClass("abierto");

  // Mostrar u ocultar el menú contextual según sea necesario
  if (!estaAbierto) {
    


    // Obtengo valores
    var iconoMenuAncho = linkMenu.outerWidth(true); // Ancho del link
    var iconoMenuAlto = linkMenu.outerHeight(); // Alto del link
    var iconoMenuPosRel = linkMenu.position(); // Posición relativa del link
    var iconoMenuPosAbs = linkMenu.offset(); // Posición absoluta del link
    var menuAncho = opcionesMenu.outerWidth(); // Ancho del menú
    var menuAlto = opcionesMenu.outerHeight(); // Alto del menú

    var leftPosition = iconoMenuPosRel.left - menuAncho + iconoMenuAncho;
    
    if(leftPosition < 17){

      leftPosition = 16;

    }

    // Posicionar el menú
    opcionesMenu.css({
      
      top: (iconoMenuPosRel.top + iconoMenuAlto + 4) + "px",
      //left: (iconoMenuPosRel.left - menuAncho + iconoMenuAncho)  + "px" 
      left: leftPosition + "px"

    });



    // Verificar si el menú se pasa del borde inferior de la ventana

    var menuBottom = iconoMenuPosAbs.top + menuAlto; // Posición del borde inferior del menú
    var windowScrollTop = $(window).scrollTop(); // Posición del scroll con respecto al top
    var windowHeight = $(window).height(); // Altura de la ventana
    var windowBottom = windowScrollTop + windowHeight; // Posición del scroll con respecto al borde inferior de la ventana

    //console.info('menuBottom: '+ menuBottom + ', windowBottom: ' + windowBottom);

    if(menuBottom > windowBottom){

       opcionesMenu.css({

          top: (iconoMenuPosRel.top - menuAlto - 4) + "px"

      })
    
    }

    // Mostrar menú
    opcionesMenu.delay(20).fadeIn(100);
    linkMenu.addClass("abierto");
    opcionesMenu.addClass("abierto");


  } else {

    opcionesMenu.hide();
    linkMenu.removeClass("abierto");
    opcionesMenu.removeClass("abierto");
    linkMenu.focus(); // Volver a enfocar el botón
  
  }

});

// Manejar la navegación con la tecla Tab dentro del menú
$(".tool-contextual-menu").on('keydown', function(e) {
  
  var firstMenuItem = $(this).find('a, button').first();
  var lastMenuItem = $(this).find('a, button').last();

  if (e.key === 'Tab') {
    if (!e.shiftKey && $(this).find(':focus').is(lastMenuItem)) {
      e.preventDefault();
      $(".link-tool-contextual-menu.abierto").focus(); // volver al botón
    } else if (e.shiftKey && $(this).find(':focus').is(firstMenuItem)) {
      e.preventDefault();
      $(".link-tool-contextual-menu.abierto").focus(); // volver al botón
    }
  } else if (e.key === 'Escape') {
    $(this).hide();
    $(".link-tool-contextual-menu.abierto").removeClass('abierto').focus();
  }
});

// Cerrar el menú contextual cuando se hace clic en cualquier lugar fuera del menú
$(document).on('click', function(event) {
  if (!$(event.target).closest(".link-tool-contextual-menu").length && !$(event.target).closest(".tool-contextual-menu").length) {
    $(".tool-contextual-menu").hide();
    $(".link-tool-contextual-menu").removeClass('abierto');
    $(".tool-contextual-menu").removeClass('abierto');
  }
});

// Cerrar el menú al utilizar la tecla "Esc"
$(document).on('keydown', function(event) {
  if (event.key === 'Escape') {
    $(".tool-contextual-menu").hide();
    $(".link-tool-contextual-menu.abierto").removeClass('abierto').focus();
  }
});

// Cerrar el menú al utilizar la tuerca
$(document).on('mousewheel', function(event) {
  $(".tool-contextual-menu").hide();
  $(".link-tool-contextual-menu").removeClass('abierto');
  $(".tool-contextual-menu").removeClass('abierto');
});

// Cerrar el menú al cambiar tamaño de la pantalla
$(window).on('resize', function(event) {
  $(".tool-contextual-menu").hide();
  $(".link-tool-contextual-menu").removeClass('abierto');
  $(".tool-contextual-menu").removeClass('abierto');
});


});