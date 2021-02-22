<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<body class="show-on-scroll animate-bottom" onload="myFunction()">
<div id="loaderContainer" style="position: absolute; left: 0px; top: 0px;  width: 100%; height: 100vh">
	<div id="loader"></div>
</div>
<div class='container-fluid'>
	
    <nav class='row navbar-light'>
        <div class='col-1'></div>
        <div class='col-6 mt-4' >
            <a style="width: 100%"  class="navbar-brand" href="welcome"><img style="width: 13rem;" src="<?php echo(base_url());?>images/logoBlack.svg"></a>
        </div>
        <div class='col-2'></div>
        <div class='col-2' style="text-align: right; margin-left: 0.6rem" >
       
			<div class="navbar-toggler acomodarNav2 mt-4" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation" >
			<div  style="display: inline-block;"  class="palabraProductos ">Productos</div> <span style="margin-left: 1rem" class="margenEnMobile margenEnDesktop navbar-toggler-icon"></span>
			</div>
			
		</div>


        </div>
        <div class='col-1'></div>
	
	<div class= 'collapse menuPosition'  id="navbarCollapse" style="z-index: 1; ">
		<div class="row desktopShow" >				
			<div class="col-1"></div>
				<div class="col-10" >
					
					<div style="width: 100%; padding-top: 2rem;">
					<a class="navbar-brand" style="width: 100%" href="welcome"><img style="width: 13rem" src="<?php echo(base_url());?>images/logo.svg"></a>
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
					
					<div style="width: 100%; padding-top: 0rem">
					<a class="navbar-brand" style="width: 100%" href="welcome"><img style="width: 8rem" src="<?php echo(base_url());?>images/logo.svg"></a>
						<div class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation" style="width: 3rem; display: inline-block; color: white; border: 0px; float: right; padding-top: 2.5rem; padding-left: 4rem; font-weight: bold; cursor: pointer; font-size: 1rem">
							X  <span class="navbar-toggle-icon"></span>

						</div>
					</div>
					
					
			
				</div>
			<div class="col-1"></div>

	</div>
		
		
