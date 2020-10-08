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
			  <div class="col-md-6">
			  </div>
			  <div class="col-md-6">
				  <ul class="mainmenu">
					  <li class="head d-sm-none text-white"> 
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
					  <li class="active"><!-- add class 'active' for correct styling active menu item -->
						  <a href="index.php">
							  Welkom
						  </a>
					  </li>
					  <li>
						  <a href="abonnementen.php">
							  Abonnementen
						  </a>
					  </li>
					  <li>
						  <a href="account.php">
							  Account
						  </a>
					  </li>
					  <li>
						  <a href="sonos.php">
							  SONOS
						  </a>
					  </li>
					  <li class="last">
						  <a href="faq.php">
							  FAQ
						  </a>
					  </li>
					  <li class="spacer d-sm-none"></li>
					  <li class="d-sm-none"> 
					  	<a href="sonos.php">
						  	Algemene voorwaarden
						  </a> 
					  </li>
						<li class="d-sm-none"> 
							<a href="sonos.php">
								Privacy
							</a> 
						</li>
						<li class="d-sm-none"> 
							<a href="sonos.php">
								Colofon
							</a> 
						</li>
				  </ul>
			  </div>
		  </div>
		  <div class="row justify-content-center">
			  <div class="col-md-6 card-left">
				  <a class="show-card-right js-show-card-right d-none">
						<i class="fal fa-chevron-double-right"></i>
				  </a>
		    	<?php include 'template-parts/card-main.php' ?>
			  </div>
			  <div class="col-md-6 card-right">
				  <a class="hide-card-right js-hide-card-right d-none d-md-block">
					  <i class="fal fa-times"></i>
				  </a>
		    	<?php include 'template-parts/card-content-welkom.php' ?>
			  </div>
		  </div>
	  </div>
	  <?php include 'template-parts/footer.php' ?>

    <script src="dist/script-min.js"></script>
  </body>
</html>