(function(){


var currentSlide = 0;
var maxSlide = $('.banner-single').length - 1;
var delay = 3;


initSlide();
chanceSlide();

function initSlide(){
    $('.banner-single').hide();
    $('.banner-single').eq(0).show();
    for(i=0; i<maxSlide+1;i++){
        var content = $('bullets').html();
        if(i==0){
            content+='<span class="active-slide"></span>';
        }else{
            content+='<span></span>';
            $('bullets').html(content);
        }
     
    }
}


    function chanceSlide(){
        setInterval(function(){
            $('.banner-single').eq(currentSlide).fadeOut(2000);
            currentSlide++;
            if(currentSlide > maxSlide)
                currentSlide = 0;
                $('.banner-single').eq(currentSlide).fadeIn(2000);
                //trocando os bullets da navegação
                $('.bullets span').removeClass('active-slide');
                $('.bullets span').eq(currentSlide).addClass('active-slide');
        } , delay * 1000);
    }

})();