<script src="<?php echo(base_url());?>/js/jquery.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="../assets/vendor/js/jquery.slim.min.js"><\/script>')</script>
<script src="<?php echo(base_url());?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo(base_url());?>/js/animtaeItems.js"></script>
<script>

$( document ).ready(function() {
  
 
  var timesBannerPassed = 0;
  
  var $carousel = $('#myCarousel');
  $carousel.carousel();

  var firstActiveItem = $carousel.find('div.carousel-item.active');
  var franjaColor =  firstActiveItem.find('.colorBanner');
  var primeraImagen =  firstActiveItem.find('.animatedBanner4');

 
  $('#myCarousel').bind('slide.bs.carousel', function (e) {

    franjaColor.css("background-color", "#527bbd")
    primeraImagen.css('visibility','visible')
    var carruselActiveItem = $carousel.find('div.carousel-item.active');
    var carruselText =  carruselActiveItem.find('.textoInteriorSinAnimacion');
    carruselText.addClass('desapareceTexto');
  
  });


});

</script>