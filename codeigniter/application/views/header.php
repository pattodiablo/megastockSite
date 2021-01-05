<?php 
ini_set('display_errors', 'on');
error_reporting(0);
define('MP_DB_DEBUG', true); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agrostock.com</title>

<link href="<?php echo(base_url());?>css/main.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo(base_url());?>wt-rotator.css"/>
	<script type="text/javascript" src="<?php echo(base_url());?>js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="<?php echo(base_url());?>js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="<?php echo(base_url());?>js/jquery.wt-rotator.min.js"></script>
	<script type="text/javascript">
    	$(document).ready(	
		
			function() {
				
				$(".container").wtRotator({
					width:993,
					height:355,
					thumb_width:28,
            		thumb_height:28,
					button_width:28,
					button_height:28,
					button_margin:2,
					auto_start:true,
					delay:5000,
					play_once:false,
					transition:"fade.left",
					transition_speed:800,
					auto_center:true,
					easing:"",
					cpanel_position:"inside",
					cpanel_align:"BR",
					timer_align:"top",
					display_thumbs:true,
					display_dbuttons:false,
					display_playbutton:false,
					display_thumbimg:false,
           			display_side_buttons:false,
					display_numbers:true,
					display_timer:false,
					mouseover_pause:false,
					cpanel_mouseover:false,
					text_mouseover:false,
					text_effect:"fade",
					text_sync:true,
					tooltip_type:"image",
					lock_tooltip:true,
					shuffle:false,
					block_size:75,
					vert_size:55,
					horz_size:50,
					block_delay:25,
					vstripe_delay:75,
					hstripe_delay:180			
				});
				
				
				
			});
			
				
					
    </script>    
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34331499-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div  class="wrap">
  <div class="header">
  
  <div style="height:213px;"><img src="<?php echo(base_url());?>images/hgeaderimg.jpg" width="993" height="256" border="0" usemap="#Map" style="margin-left:-535px" />
    <map name="Map" id="Map">
      <area shape="rect" coords="41,10,293,247" href="<?php echo(site_url());?>" alt="AGROSTOCK" />
    </map>
</div>
		<div><a href="<?php echo(site_url());?>" class="menuSup">Inicio </a> | <a href="<?php echo(site_url());?>/quienesSomos" class="menuSup">Quiénes Somos </a> |   <a href="<?php echo(site_url());?>/contactos" class="menuSup">Suscríbase a nuestro Boletín Informativo</a></div>
  </div>
<div class="menu">
	<div style="text-align:center; ">
    <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr style="text-align: center">
    <td><a href="<?php echo(site_url());?>/catalogo" class="menuFont"><img src="<?php echo(base_url());?>images/catalogoMenu.png" width="220" height="21" border="0" /></a></td>
    <td><img src="<?php echo(base_url());?>images/menuDivBar.png" width="10" height="62" /></td>
    <td>  <a href="<?php echo(site_url());?>/noticias" class="menuFont"><img src="<?php echo(base_url());?>images/noticiasMenu.png" width="175" height="21" border="0" /></a></td>
    <td><img src="<?php echo(base_url());?>images/menuDivBar.png" width="10" height="62" /></td>
    <td> <a href="<?php echo(site_url());?>/servicios" class="menuFont"><img src="<?php echo(base_url());?>images/serviciosMenu.png" width="111" height="21" border="0" /></a></td>
    <td><img src="<?php echo(base_url());?>images/menuDivBar.png" width="10" height="62" /></td>
    <td> <a href="<?php echo(site_url());?>/contactos" class="menuFont"><img src="<?php echo(base_url());?>images/contactosMenu.png" width="127" height="21" border="0" /></a></td>
  
  </tr>
</table>       
	</div>
</div>

