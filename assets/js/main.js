
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
    // metedo melhor para visualização
       listaMenu.slideToggle();

        //abrir e fechar sem efeito,
      
      /*  if(listaMenu.is(':hidden') == true){
            listaMenu.show();
        }else{
            listaMenu.hide();
        }
        */
    });

})();