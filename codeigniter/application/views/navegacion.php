<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<body class="show-on-scroll animate-bottom" onload="myFunction()">
<div id="loaderContainer" style="position: absolute; left: 0px; top: 0px;  width: 100%; height: 100vh">
	<div id="loader"></div>
</div>
<div class='container-fluid mt-4'>
    <nav class='row navbar-light'>
        <div class='col-1'></div>
        <div class='col-2'>
            <a class="navbar-brand" href="welcome"><img style="width: 13rem;" src="<?php echo(base_url());?>images/logoBlack.svg"></a>
        </div>
        <div class='col-6'></div>
        <div class='col-2' style="text-align: right; margin-left: 0.6rem" >
       
			<div class="navbar-toggler acomodarNav2" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation" >
			<div style="display: inline-block; margin-top: 0.8rem; ">Productos</div> <span class="navbar-toggler-icon"></span>
			</div>
			
		</div>


        </div>
        <div class='col-1'></div>
	
	<div class= 'collapse menuPosition'  id="navbarCollapse" style="z-index: 1; ">
		<div class="row" >				
			<div class="col-1"></div>
				<div class="col-10" >
					
					<div style="width: 100%; padding-top: 2rem;">
					<a class="navbar-brand" href="#"><img style="width: 12rem" src="<?php echo(base_url());?>images/logo.svg"></a>
						<div class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation" style="width: 3rem; display: inline-block; color: white; border: 0px; float: right; padding-top: 1rem; font-weight: bold">
							X  <span class="navbar-toggle-icon"></span>

						</div>
					</div>
					
					
			
				</div>
			<div class="col-1"></div>
				
			

		</div>
	