<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="dist/styles-min.css">

    <title>KHN Muziek</title>
  </head>
  <body>
	  <div class="container">
		  <div class="row">
			  <div class="col-md">
			  </div>
			  <div class="col-md">
				  <ul class="mainmenu">
					  <li class="d-sm-none text-white"> 
					  	<div class="row">
						  	<div class="col">
									<h2> KHN Muziek </h2>
						  	</div>
						  	<div class="col-auto">
							  	<a class="menu-toggle">
							  		<i class="fal fa-times" aria-hidden="true"></i>
							  	</a>
						  	</div>
					  	</div>
					  </li>
					  <li><!-- add class 'active' for correct styling active menu item -->
						  <a href="index.php">
							  Welkom
						  </a>
					  </li>
					  <li>
						  <a href="abonnementen.php">
							  Abonnementen
						  </a>
					  </li>
					  <li class="active">
						  <a href="sonos.php">
							  SONOS
						  </a>
					  </li>
					  <li class="last">
						  <a href="faq.php">
							  FAQ
						  </a>
					  </li>
					  <li class="d-sm-none"> 
					  	<a href="">
						  	Algemene voorwaarden
						  </a> 
					  </li>
						<li class="d-sm-none"> 
							<a href="">
								Privacy
							</a> 
						</li>
						<li class="d-sm-none"> 
							<a href="">
								Colofon
							</a> 
						</li>
				  </ul>
			  </div>
		  </div>
		  <div class="row">
			  <div class="col-md">
		    	<?php include 'template-parts/card-main.php' ?>
			  </div>
			  <div class="col-md">
		    	<?php include 'template-parts/card-content-sonos.php' ?>
			  </div>
		  </div>
	  </div>
		<?php include 'template-parts/footer.php' ?>
		
    <script src="dist/script-min.js"></script>
  </body>
</html>