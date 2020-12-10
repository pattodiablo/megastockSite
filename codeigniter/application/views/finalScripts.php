

<script src="<?php echo(base_url());?>/js/jquery.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="../assets/vendor/js/jquery.slim.min.js"><\/script>')</script>
<script src="<?php echo(base_url());?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo(base_url());?>/js/animtaeItems.js"></script>
<script>
	
	$('.navbar-toggler').click(function(e){ //activar o desactivar scroll cuando se presiona el boton menu
		$("body").toggleClass("hidden");
		
	});
	

$( document ).ready(function() {
  
 
  var timesBannerPassed = 0;
  
  var $carousel = $('#myCarousel');
  $carousel.carousel();

  var firstActiveItem = $carousel.find('div.carousel-item.active');
  var franjaColor =  firstActiveItem.find('.colorBanner');
  var primeraImagen =  firstActiveItem.find('.animatedBanner4');
  var primerBoton =  firstActiveItem.find('#firstBoton');
	  $('#firstBoton').css("color", "#ffffff")
 
  $('#myCarousel').bind('slide.bs.carousel', function (e) {

    franjaColor.css("background-color", "#9163a6")
    primeraImagen.css('visibility','visible')
    var carruselActiveItem = $carousel.find('div.carousel-item.active');
    var carruselText =  carruselActiveItem.find('.textoInteriorSinAnimacion');
    carruselText.addClass('desapareceTexto');
    $('#firstBoton').css("color", "#9163a6");
  });


});
	

	
	
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("loaderContainer").style.display = "none";
	
  document.getElementById("myDiv").style.display = "block";
}


</script>