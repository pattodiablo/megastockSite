<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

</header>

<main role="main" style="display:none;" id="myDiv">
	
<div class="container-fluid">
	
	<div class="row show-on-scroll">
		<div class="col-md-1"></div>
		<div class="col-md-10 fade-in" style="margin-top: 6rem"><img class="img-fluid"  src="<?php echo(base_url());?>images/8Contactos/8_Contactos_Banner.png"></div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="row" style="margin-top: 6rem">
		<div class="col-1"></div>
		<div class="col-10 text-center">
				<p style="color: #ffa400; font-size: 1.5rem; font-weight: bold; margin-top: 2.5rem">Dónde</p>
			<p style="color: #f37021; font-size: 3rem; font-family: 'Playfair Display', serif; margin-top: -1.7rem"> Estamos </p>
		
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63837.06587827563!2d-78.20798931706965!3d0.052937344460910966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2a096e2ba4c62d%3A0x545119c661b62209!2sMEGASTOCK%20ECUADOR!5e0!3m2!1ses!2sec!4v1606836789858!5m2!1ses!2sec" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<div class="col-1"></div>
	</div>
	
	<div class="row show-on-scroll p-6 "> 
			<div class="col-lg-4"></div>
			<div class="col-lg-4" style="text-align: center">
				<div style="height: 3rem"></div>
				<p style="color: #ffa400; font-size: 1.5rem; font-weight: bold; margin-top: 2.5rem">Estamos para</p>
				<p style="color: #f37021; font-size: 3rem; font-family: 'Playfair Display', serif; margin-top: -1.7rem"> Asesorarle</p>
				<p style="color: #353535; font-size: 1.2rem; font-weight: 400; margin-top: 1.3rem">Si desea más información a cerca de nuestros productos y servicios, no dude en contactarse con nosotros, que con gusto lo atenderemos.</p>
				
				<div style="height: 3rem"></div>
			</div>
			<div class="col-lg-4"></div>
	</div>
	
	<div class="row show-on-scroll p-6" style="background-color: #eaeaea; padding-top: 7rem; padding-bottom: 7rem;"> 
	
		<div class="col-1 col-md-3"></div>
		<div class="col-10 col-md-3 formulario" style="font-size: 1rem; color:crimson">
			<?php echo validation_errors(); ?>
			<?php echo form_open('contactenos'); ?>
			  <div class="form-group">
				  <ul style="list-style-type: none; padding: 0; margin: 0; width: 100%">
				  	<li style="display:inline-block; color: #353535">Nombre<p style="display: inline-block; color: #f37021">*</p></li>
					<li style="display:inline-block; padding: 0; margin: 0; margin-left: 1rem; width: 74%;  float: right">
						<input  name="nombre"   style="width: 100%; background-color: #eaeaea; border:1px solid #353535" type="text"  aria-describedby="emailHelp">
					</li>
				  </ul>
			  </div>
			 <div class="form-group">
				  <ul style="list-style-type: none; padding: 0; margin: 0; width: 100%">
				  	<li style="display:inline-block;  color: #353535">Apellido<p style="display: inline-block; color: #f37021">*</p></li>
					<li style="display:inline-block; padding: 0; margin: 0; margin-left: 1rem; width: 74%; float: right">
						<input  name="apellido"   style="width: 100%; background-color: #eaeaea; border:1px solid #353535" type="text"  aria-describedby="emailHelp">
					</li>
				  </ul>
			  </div>
				 
			 <div class="form-group">
				  <ul style="list-style-type: none; padding: 0; margin: 0; width: 100%">
				  	<li style="display:inline-block;  color: #353535">Teléfono<p style="display: inline-block; color: #f37021">*</p></li>
					<li style="display:inline-block; padding: 0; margin: 0; margin-left: 1rem; width: 74%;  float: right">
						<input  name="telefono"   style="width: 100%; background-color: #eaeaea; border:1px solid #353535" type="text"  aria-describedby="emailHelp">
					</li>
				  </ul>
			  </div>
				 
			<div class="form-group">
				  <ul style="list-style-type: none; padding: 0; margin: 0; width: 100%">
				  	<li style="display:inline-block;  color: #353535">Email<p style="display: inline-block; color: #f37021">*</p></li>
					<li style="display:inline-block; padding: 0; margin: 0; margin-left: 1rem; width: 74%;  float: right">
						<input   name="email"  style="width: 100%; background-color: #eaeaea; border:1px solid #353535" type="email"  aria-describedby="emailHelp">
					</li>
				  </ul>
			</div>
			 
			<div class="form-group">
				  <ul style="list-style-type: none; padding: 0; margin: 0; width: 100%">
				  	<li style="display:inline-block;  color: #353535">Mensaje<p style="display: inline-block; color: #f37021">*</p></li>
					<li style="display:inline-block; padding: 0; margin: 0; margin-left: 1rem; width: 74%;  float: right">
						
						<textarea  name="mensaje"  id="mensaje" rows="4"  style=" border:1px solid #353535; background-color: #eaeaea; width: 100%"></textarea>
					</li>
				  </ul>
			</div>
			<div class="form-group">
				<button  name="enviar" id="enviar" value="enviar" type="submit" class="botonEnviarMail" >+ ENVIAR EMAIL</button>
			 </div>
			  
			  
			</form>
		</div>
		<div class="col-1 col-md-1"></div>
	
		<div class="col-10 col-md-3 contactosMobile" >
		<p class="textAlignResponsive" style="font-size: 1.2rem; font-weight: bold">PBX: (02) 382 9070</p>
			<div>
			<p  class="textAlignResponsive" style="color: #f37021;   font-size: 1rem; margin-top: -0.5rem">• QUITO - CUMBAYÁ</p>
			<p  class="textAlignResponsive" style="font-size: 1rem;   font-weight: bold; ">(593) 99 283 9949</p>
			<p  class="textAlignResponsive" style="font-size: 1rem;   margin-top: -1rem">comercial@megaecuador.com</p>
			</div>
			
			<div>
			<p  class="textAlignResponsive" style="color: #f37021;   font-size: 1rem; margin-top: 1rem">• TABACUNDO</p>
			<p  class="textAlignResponsive" style="font-size: 1rem;   font-weight: bold">(593) 99 732 0974</p>
			<p  class="textAlignResponsive" style="font-size: 1rem;   margin-top: -1rem">ventas@megaecuador.com</p>
			</div>
			
			<div>
			<p  class="textAlignResponsive" style="color: #f37021;   font-size: 1rem; margin-top: 1rem">• LASSO</p>
			<p  class="textAlignResponsive" style="font-size: 1rem;   font-weight: bold ">(593) 99 162 1856</p>
			<p  class="textAlignResponsive" style="font-size: 1rem;   margin-top: -1rem">ventassur@megaecuador.com</p>
			</div>
			
			<div>
			<p  class="textAlignResponsive" style="color: #f37021;   font-size: 1rem; margin-top: 1rem">• GUAYAQUIL</p>
			<p  class="textAlignResponsive" style="font-size: 1rem;   font-weight: bold">(593) 99 784 1049</p>
			<p  class="textAlignResponsive" style="font-size: 1rem;   margin-top: -1rem">ventas3@megaecuador.com</p>
			</div>
			
		</div>
		<div class="col-1 col-md-2"></div>
		
	</div>
		
</div>
	
	
</div>



</body>