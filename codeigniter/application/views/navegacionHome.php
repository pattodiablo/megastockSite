<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<body class="show-on-scroll animate-bottom" onload="myFunction()">
<div id="loaderContainer" style="position: absolute; left: 0px; top: 0px;  width: 100%; height: 100vh">
	<div id="loader"></div>
</div>


 <header>
      
  <nav class="navbar-light navegacionHead" >
	 
		
		  <div class="container-fluid">
			  <div class="row" style="padding-top: 2rem">
				 <div class="col-1 col-md-1"></div>
				 <div class="col-3 col-md-8">

					<a class="navbar-brand" href="#"><img style="width: 13rem; margin-left: -1rem" src="<?php echo(base_url());?>images/logo.svg"></a>


				 </div>
				 <div class="col-6 col-md-3">
				 <div class="navbar-toggler acomodarNav" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
						<div class="palabraProductos" style="display: inline-block; margin-top: 1rem; ">Productos  </div> <span style="margin-left: 1rem" class="navbar-toggler-icon"></span>
					</div>
				 </div>
				<div class="col-2 col-md-0" ></div>
		</div>
		
		
	 </div>
	 
	  
    <div class= 'collapse menuPosition'  id="navbarCollapse">
	
		<div class="row desktopShow" >				
			<div class="col-1"></div>
				<div class="col-10" >
					
					<div style="width: 100%; padding-top: 2rem">
					<a class="navbar-brand" href="welcome"><img style="width: 13rem" src="<?php echo(base_url());?>images/logo.svg"></a>
						<div class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation" style="width: 3rem; display: inline-block; color: white; border: 0px; float: right; padding-top: 1rem; font-weight: bold; cursor: pointer">
							X  <span class="navbar-toggle-icon"></span>

						</div>
					</div>
					
					
			
				</div>
			<div class="col-1"></div>

	</div>
		
		<div class="row mobileShow" >				
			<div class="col-1"></div>
				<div class="col-10" >
					
					<div style="width: 100%; padding-top: 2rem">
					<a class="navbar-brand" href="welcome"><img style="width: 8rem" src="<?php echo(base_url());?>images/logo.svg"></a>
						<div class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation" style="width: 3rem; display: inline-block; color: white; border: 0px; float: right; padding-top: 2.5rem; padding-left: 4rem; font-weight: bold; cursor: pointer; font-size: 1rem">
							X  <span class="navbar-toggle-icon"></span>

						</div>
					</div>
					
					
			
				</div>
			<div class="col-1"></div>

	</div>
		