// DEIXAR O MENU FIXO AO ROLAR A PAGINA
// =====================================================================
$(function(){
  var nav = $('#menuHeader');
  var menu = $('');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 600) {
      nav.addClass("menu-fixo");
      $(".flex, .mtop a, .sub-menu, .menu-mobile").addClass('light');
      // $('.sub-menu').css({'background-color':'#222'})
      // $('.menu-fixo').slideDown(5000);
      $('.logosi, .toggle, .menu-mobile a').css('color', '#888');
      // $('.logosi').document.wi
      // $('.logosi').removeClass('si')

    } else {
      // $('.sub-menu').addClass('dark');
      nav.removeClass("menu-fixo");
      // $('.logosi').addClass('si')
      // $('.logosi').removeClass('tm')
      $(".flex, .mtop a, .sub-menu, .menu-mobile").removeClass('light');
      $('.logosi, .toggle, .menu-mobile a').css('color', '#ddd');
    }
  });
});
// ======================================================================================
// TESTE DESFOCAR O FUNDO NO EVENTO OVER
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
  $('.toggle, .menu-mobile a, .box').click(function() {
    $('.menu-mobile').toggleClass('ativo');
    $('.inicio').toggleClass('none');
  });
  // $('.menu.')
});
