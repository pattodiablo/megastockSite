<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

</header>

<main role="main" style="display:none;" id="myDiv">
	
<div class="container-fluid">
	
	<div class="row show-on-scroll">
		<div class="col-md-1"></div>
		<div class="col-md-10" style="margin-top: 6rem"><img class="img-fluid"  src="<?php echo(base_url());?>images/8Contactos/8_Contactos_Banner.png"></div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="row show-on-scroll p-6 "> 
			<div class="col-lg-4"></div>
			<div class="col-lg-4" style="text-align: center">
				<div style="height: 3rem"></div>
				<p style="color: #ffa400; font-size: 1.5rem; font-weight: bold; margin-top: 2.5rem">Estamos</p>
				<p style="color: #f37021; font-size: 3rem; font-family: 'Playfair Display', serif; margin-top: -1.7rem">para Asesorarle</p>
				<p style="color: #353535; font-size: 1.2rem; font-weight: 400; margin-top: 1.3rem">Si desea más información a cerca de nuestros productos y servicios, no dude en contactarse con nosotros, que con gusto lo atenderemos.</p>
				
				<div style="height: 3rem"></div>
			</div>
			<div class="col-lg-4"></div>
	</div>
	
	<div class="row show-on-scroll p-6" style="background-color: #eaeaea; padding-top: 7rem; padding-bottom: 7rem;"> 
	
		<div class="col-3"></div>
		<div class="col-3 formulario" style="font-size: 1rem; color:crimson">
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
		<div class="col-1"></div>
		<div class="col-3" >
		<p style="font-size: 1.2rem; text-align: right; font-weight: bold">PBX: (02) 382 9070</p>
			<div>
			<p style="color: #f37021;  text-align: right; font-size: 1rem; margin-top: -0.5rem">• QUITO - CUMBAYÁ</p>
			<p style="font-size: 1rem;  text-align: right; font-weight: bold; ">(593) 99 283 9949</p>
			<p style="font-size: 1rem;  text-align: right; margin-top: -1rem">comercial@megaecuador.com</p>
			</div>
			
			<div>
			<p style="color: #f37021;  text-align: right; font-size: 1rem; margin-top: 1rem">• TABACUNDO</p>
			<p style="font-size: 1rem;  text-align: right; font-weight: bold">(593) 99 732 0974</p>
			<p style="font-size: 1rem;  text-align: right; margin-top: -1rem">ventas@megaecuador.com</p>
			</div>
			
			<div>
			<p style="color: #f37021;  text-align: right; font-size: 1rem; margin-top: 1rem">• LASSO</p>
			<p style="font-size: 1rem;  text-align: right; font-weight: bold ">(593) 99 162 1856</p>
			<p style="font-size: 1rem;  text-align: right; margin-top: -1rem">ventassur@megaecuador.com</p>
			</div>
			
			<div>
			<p style="color: #f37021;  text-align: right; font-size: 1rem; margin-top: 1rem">• GUAYAQUIL</p>
			<p style="font-size: 1rem;  text-align: right; font-weight: bold">(593) 99 784 1049</p>
			<p style="font-size: 1rem;  text-align: right; margin-top: -1rem">ventas3@megaecuador.com</p>
			</div>
			
		</div>
		<div class="col-2"></div>
		
	</div>
		
</div>
	
	
</div>



</body>