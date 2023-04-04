(function ($) {
  $(document).ready(function () {
    const w = window.innerWidth;
    const h = window.innerHeight;
    const mobile = w < 1300;
    const desktop = h < w;
    const menuMobile = document.querySelector('.menu-mobile .mainMenu');
    
    window.onresize = function(){ 
      const newW = window.innerWidth;
      if(newW != w){
        location.reload(); 
      }      
    };   


    /* ACCORDION ------------------------------------------------------------------------------*/
    $('p.accordion').click(function () {
      $p = $(this).parent();
      $container = $(this).parents('.fornecedor');
      if ($p.hasClass('active')) {
        $p.removeClass('active');
        $container.removeClass('active');
      } else {
        $('.fornecedor').removeClass('active');
        $p.addClass('active');
        $container.addClass('active');
      }
      $('.item.active').not($p).removeClass('active');      
    });

    /* CARROSSEL */
    $('.carrossel').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      dots: false,
      infinite: true,
      arrows: false,
      adaptiveHeight: true,
      fade: true,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            //sdots: false,
          },
        },
      ],
    });

    $('.depoimentos').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      dots: false,
      infinite: true,
      arrows: true
    });

    /* fancybox */
    /*$('[data-fancybox="gallery"]').fancybox({
      buttons: ['close'],
      loop: false,
      protect: true,
    });*/

    /*document.addEventListener( 'wpcf7submit', function( event ) {
      console.log('teste');
      location = 'https://www.elospace.com.br/contato-enviado-com-sucesso/';
    }, false );*/

    if (mobile) {
      $('.menu-menu-secundario-container').appendTo('.menu-menu-principal-container').show();

      /* botão do menu */
      $('.menuBtn').click(function () {
        $('.menuBtn').toggleClass('act');
        if ($('.menuBtn').hasClass('act')) {
          $('.mainMenu').addClass('act');
        } else {
          $('.mainMenu').removeClass('act');
        }
      });
    }else{
      /* botão do menu */
      $('.menuBtn').click(function () {
        $(this).toggleClass('act');
        if ($(this).hasClass('act')) {
          $('.menu-menu-secundario-container').addClass('act');
        } else {
          $('.menu-menu-secundario-container').removeClass('act');
        }
      });
    }

    /*--- STICKY - FIXED SIDEBAR -------------------------------------------*/
    function fixedSidebar(){

      var sectionOffset = $('#main-wrapper').offset().top;
      
      var rightHeight = $('#main-wrapper').outerHeight();
      var leftHeight = $('#sidebar').outerHeight() + 50;
      var margin = rightHeight - leftHeight - 50;
      var removeFixedOffset = sectionOffset + rightHeight - leftHeight;

      $(window).on('scroll', function() {       

        if ($(this).scrollTop() > sectionOffset) {
          $('#sidebar').addClass('fixed');
        } else {
          $('#sidebar').removeClass('fixed');
        }
        if ($(this).scrollTop() > removeFixedOffset) {
          $('#sidebar').removeClass('fixed');
          $('#sidebar').css('margin-top',margin+'px');
        } else{
          $('#sidebar').css('margin-top','0px');
        }
      });  
    } 

    setTimeout(fixedSidebar, 500);

  });
})(jQuery);
