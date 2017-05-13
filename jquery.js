// DEIXAR O MENU FIXO AO ROLAR A PAGINA
// =====================================================================
$(function(){
  var nav = $('#menuHeader');
  var menu = $('');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 600) {
      nav.addClass("menu-fixo");
      $(".flex, .mtop").addClass('ligth');
      $(".sub-menu a, .sub-menu, .menu-mobile").addClass('ligthB');
      $(".sub-menu a, .menu-mobile a ").addClass('ligth-a');


    } else {
      nav.removeClass("menu-fixo");
      $(".sub-menu a, .sub-menu, .menu-mobile").removeClass('ligthB');
      $(".flex, .mtop").removeClass('ligth');
      $(".sub-menu a, .menu-mobile a").removeClass('ligth-a');


    }
  });
});
// ======================================================================================
// REMOVE O  TEXTO DA HEADER NO EVENTO SUB MENU
$(document).ready(function() {
  var hover = $('.mtop li');
  var inicio = $('.inicio');
  hover.hover(function() {
    inicio.addClass('none')
    // inicio.hide();
  }, function(){
    inicio.removeClass('none')
    // inicio.show()
  });
});
// =========================================================
// MENU DO TOPO ANIMADO
$('.mtop > li').hover(function(){
$(this).find('.sub-menu').slideDown(100);
}, function(){
$(this).find('.sub-menu').slideUp(100);
});

// MENU MOBILE
$(document).ready(function() {
  $('.toggle, .menu-mobile a, footer').click(function() {
    $('.inicio').toggle(200);
    // $('.inicio').animate({
      // left: 1200px,
      // width: 'toggle'
    // }, 200);
    $('.menu-mobile').animate({
      width: 'toggle'
    }, 200);
  });
  $('.box').click(function() {
    $('.menu-mobile').animate({width: 'hide'}, 100)
    $('.inicio').toggle(200);
  });
});


// MENU MOBILE
// $(document).ready(function() {
//   $('.toggle, .menu-mobile a, footer').click(function() {
//     $('.menu-mobile').toggleClass('ativo');
//     $('.inicio').toggleClass('none');
//   });
//   $('.box').click(function(event) {
//     $('.menu-mobile').removeClass('ativo');
//     $('.inicio').removeClass('none');
//
//   });
//   // $('.menu.')
// });
