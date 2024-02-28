$(function() {

  
  // 01. steps

  $('.step-modal-link, .overlay-mobile').on('click', function(e) {
    
    e.preventDefault();
    $(this).closest(".Steps--tipo").toggleClass('is-visible');

  });

  
// 02. Menú contextual


$(".link-tool-contextual-menu").click(function(e) {
  
  e.preventDefault();

  var target = $(this).data('target');

  var opcionesMenu = $("#" + target);
  var linkMenu = $(this);
  var estaAbierto = linkMenu.hasClass("abierto");
  var elementoActual = $(this);
  var windowWidth = $(window).width();

  // Ocultar cualquier otro menú contextual que esté abierto
  $(".tool-contextual-menu.abierto").hide();

  // Remover la clase "abierto" de los demás elementos
  var elementosMenu = $(".link-tool-contextual-menu:not(:focus)");
  elementosMenu.removeClass("abierto");
  opcionesMenu.removeClass("abierto");

  // Mostrar u ocultar el menú contextual según sea necesario
  if (!estaAbierto) {
    // Obtener la posición del icono de menú y mostrar el menú contextual
  
    var iconoMenuPos = $(this).offset();
    var iconoMenuAncho = $(this).outerWidth();
    var iconoMenuAlto = $(this).outerHeight();

    if(windowWidth > 480){

      opcionesMenu.css({
          top: (iconoMenuPos.top + iconoMenuAlto) + "px",
          left: (iconoMenuPos.left + iconoMenuAncho - opcionesMenu.outerWidth() + 16) + "px"
          //left: (iconoMenuPos.left + ((iconoMenuAncho - opcionesMenu.outerWidth()) / 2)) + "px" (alineación al centro)
          
      });

    }else{

      opcionesMenu.css({
        
        top: (iconoMenuPos.top + iconoMenuAlto ) + "px",
        left: (iconoMenuPos.left + iconoMenuAncho - opcionesMenu.outerWidth()) + "px"
      
      });

    }



   // Verificar si el menú se pasa del borde inferior de la ventana
    var iconoMenuPosTop = iconoMenuPos.top + iconoMenuAlto + 8;
    var windowHeight = $(window).height();
    var menuHeight = opcionesMenu.outerHeight();
    var menuBottom = parseInt(opcionesMenu.css('top')) + menuHeight;
    var windowBottom = windowHeight + $(window).scrollTop();

    if (menuBottom > windowBottom) {

      if(windowWidth > 480){

        opcionesMenu.css({
            top: (iconoMenuPosTop - menuHeight - iconoMenuAlto - 8) + "px"
        });

      }else{

        opcionesMenu.css({
          top: (iconoMenuPosTop - menuHeight - iconoMenuAlto + 4) + "px"
        });

      }

        opcionesMenu.addClass('up');
        opcionesMenu.removeClass('down');

    }else{

      opcionesMenu.addClass('down');
      opcionesMenu.removeClass('up');

    }

    //opcionesMenu.show();

    opcionesMenu.delay(20).fadeIn(100);
    elementoActual.addClass("abierto");
    opcionesMenu.addClass("abierto");

  } else {

    $(".contextual-menu").hide();
    elementoActual.removeClass("abierto");
    opcionesMenu.removeClass("abierto");
  }
});

// Cerrar el menú contextual cuando se hace clic en cualquier lugar fuera del menú
$(window).click(function(event) {
  if (!$(event.target).closest(".link-tool-contextual-menu").length && !$(event.target).closest(".tool-contextual-menu").length) {
    $(".tool-contextual-menu").hide();
    $(".link-tool-contextual-menu").removeClass('abierto');
    $(".tool-contextual-menu").removeClass('abierto');
    
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



