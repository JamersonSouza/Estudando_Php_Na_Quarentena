
(function(){

    $('nav.mobile').click(function(){
        //função para click na nav mobile
        var listaMenu = $('nav.mobile ul');
        //abrindo menu pelo fadeIn 
        /*
        if(listaMenu.is(':hidden') == true){
        listaMenu.fadeIn();
        } else {
            listaMenu.fadeOut();
        }*/
  

        //abrir e fechar sem efeito,
      
      /*  if(listaMenu.is(':hidden') == true){
            listaMenu.show();
        }else{
            listaMenu.hide();
        }
        */
       if(listaMenu.is(':hidden') == true){
           //outra opção || var icon = $('.menu-mobile i ');
          var icon =  $('.menu-mobile').find('i');
          icon.removeClass('fa-bars');
          icon.addClass('fa-times');
          listaMenu.slideToggle();
       }else{
        var icon =  $('.menu-mobile').find('i');
        icon.removeClass('fa-times');
        icon.addClass('fa-bars');
        listaMenu.slideToggle();
       }

     // metedo melhor para visualização
       //fechado
       //<i class="fas fa-times"></i>
       //aberto
      // <i class="fas fa-bars"></i>
    });

    if($('target').length > 0){
        // O elemento existe, portanto precisamos dar um scroll em algum elemento
        var element = '#'+$('target').attr('target');
        var divScroll = $(element).offset().top;
        $('html,body').animate({scrollTop:divScroll}, 2000);
    }

})();