<script src="Views/assets/vendor/js/bootstrap.js"></script>
<script src="Views/assets/js/jquery.js"></script>
<script src="Views/assets/js/slick.js"></script>
<script src="Views/assets/js/bootstrap.min.js"></script>
<script src="Views/assets/js/swipper.js"></script>

<script>
        if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

  window.onscroll = function () { myFunction() };
  function myFunction() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {

      $('#livrazenav').css({

        //display : 'none', // marge intérieure de 30px
        paddingTop: '30px ', // marge intérieure de 30px
        transition: '1s',
        background: '#D7D7D7',

      }); 
         $('.social_medias').css({       
        bottom : '200px',
        transition:'0.6s'
        // marge intérieure de 30px
 
    });
    } 
     else if (document.body.scrollTop < 150 || document.documentElement.scrollTop < 150) {
    
    //   $('.social_medias').css({   
    //     bottom :  '80px',
    //     transition: '3s',    
    //      // marge intérieure de 30px 
    // });
    $('#livrazenav').css({

        paddingTop: '10px ', // marge intérieure de 30px
        transition: '0.7s',
        background: 'rgba(249, 249, 249, 0.726) '
      });
    }

    // else
    //     $('.social_medias').css({   
    //     bottom : '90px ',
    //     transition: '3s',    
    //      // marge intérieure de 30px 
    // });
    // $('#livrazenav').css({

    //    background: 'rgba(249, 249, 249, 0.726) '

    //   }); 

      
    
  } 
</script>
<!-- debut du script pour partenaires -->
<script>
  $('.customer-logos').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
</script>
<script>
$('.customer-books').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });

</script>  
<!-- fin du script pour partenaires -->

<script>        $(document).ready(function () {
    //Inverse l'état du menu     

    $('.professions').change(function () {
      var val = $(".professions option:selected").text();
      if (val == "Etudiant") {
        
        $('.universite').toggle(1000);
      }
      else if (val == "Eleve") {
        $('.votrecole').toggle(1000);
      }
    });

    $('.residence').change(function () {
      var val = $(".residence option:selected").text();
      if (val == "Goma") {
          
       // $('#erreurlieux').toggle(1000);
      }
      else if(val == "Autre") {erreurlieux
        $('.custum_container').hide(1000);
        $('#erreurlieux').toggle(1000);
      }
    });

    $('.search_box').click(function () {
        //alert('merde');
         $('.mynav').toggle(1000);
      
    });



  });    
</script>