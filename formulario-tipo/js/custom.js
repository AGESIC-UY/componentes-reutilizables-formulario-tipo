$(function() {

  console.log('custom.js se ha cargado');

  $('.step-modal-link, .overlay-mobile').on('click', function(e) {
    
    e.preventDefault();
    $(this).closest(".Steps").toggleClass('is-visible');

  });



});



