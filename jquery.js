// DEIXAR O MENU FIXO AO ROLAR A PAGINA
// =====================================================================
$(function(){
  var nav = $('#menuHeader');
  var menu = $('');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 600) {
      nav.addClass("menu-fixo");
      $(".flex, .mtop a, .sub-menu, .menu-mobile").addClass('ligth');
      $(".flex, .mtop a, .sub-menu, .menu-mobile a, .logosi a, .toggle, .btnToggle").addClass('ligth-a');
    } else {
      nav.removeClass("menu-fixo");
      $(".flex, .mtop a, .sub-menu, .menu-mobile").removeClass('ligth');
      $(".flex, .mtop a, .sub-menu, .menu-mobile a, .logosi a, .toggle, .btnToggle").removeClass('ligth-a');
    }
  });
});
// ======================================================================================
$(document).ready(function() {
  var over = $('.mtop');
  over.mouseover(function() {
    $(".inicio").addClass('none');

  });
  over.mouseout(function() {
    $('.inicio').removeClass('none');
  });
});

$(document).ready(function() {
  $('.toggle, .menu-mobile a, footer').click(function() {
    $('.menu-mobile').toggleClass('ativo');
    $('.inicio').toggleClass('none');
  });
  $('.box').click(function(event) {
    $('.menu-mobile').removeClass('ativo');

  });
  // $('.menu.')
});
