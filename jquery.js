// DEIXAR O MENU FIXO AO ROLAR A PAGINA
// =====================================================================
$(function(){
  var nav = $('#menuHeader');
  var menu = $('');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 600) {
      nav.addClass("menu-fixo");
      $(".flex, .mtop a, .sub-menu").addClass('light');
      // $('.sub-menu').css({'background-color':'#222'})
      // $('.menu-fixo').slideDown(5000);
      $('.logosi').css('color', '#888');

    } else {
      // $('.sub-menu').addClass('dark');
      nav.removeClass("menu-fixo");
      $(".flex, .mtop a, .sub-menu").removeClass('light');
      $('.logosi').css('color', '#ddd');
    }
  });
});
// ======================================================================================
// TESTE DESFOCAR O FUNDO NO EVENTO OVER
$(document).ready(function() {
  var over = $('.mtop');
  over.mouseover(function() {
    // visibility: hidden
    $(".inicio").css('visibility', 'hidden');
    // $('.sub-menu').slideUp(500,stop(true, true));
  });
  over.mouseout(function() {
    $('.inicio').css('visibility', 'visible');
    // $('.sub-menu').slideDown(500,stop());
    // $(".inicio").css('transition', '1s');
  });
});

// $(document).ready(function() {
//     $( '.mtop li' ).hover(
//         function(){
//             $(this).children('.sub-menu').slideDown(200);
//         },
//         function(){
//             $(this).children('.sub-menu').slideUp(200);
//         }
//     );
// });


//     $(document).ready(function(){
//       var drop = $(".fa-caret-down");
//       drop.click(function(){
//         $('.sub-menu').css({'display':'block'});
//     });
// });
