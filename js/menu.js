function loadPage(page) {
   $('#pageFrame').attr('src', page + '.html');
  }

function switch_menue(){
    if ($('.left_menu').css('width') == '200px'){
      $('.left_menu').css('width','15px')
      $('.main_content').css('margin-left','15px')
      $('#switch_menue_button').html('<ion-icon name="chevron-forward-circle-outline"></ion-icon>');
      $('.ul_menu').hide();
    }else{
      $('.left_menu').css('width','200px')
      $('.main_content').css('margin-left','200px')
      $('#switch_menue_button').html('<ion-icon name="chevron-back-circle-outline"></ion-icon>');
      $('.ul_menu').show();
    }
  }