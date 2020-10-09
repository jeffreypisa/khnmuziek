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
			  <div class="col-lg-6">
			  </div>
			  <div class="col-lg-6">
				  <?php $activepage = 'sonos'; include 'template-parts/menu.php' ?>
			  </div>
		  </div>
		  <div class="row justify-content-center">
			  <div class="col-lg-6 card-left">
				  <a class="show-card-right js-show-card-right d-none">
						<i class="fal fa-chevron-double-right"></i>
				  </a>
		    	<?php include 'template-parts/card-main.php' ?>
			  </div>
			  <div class="col-lg-6 card-right">
				  <a class="hide-card-right js-hide-card-right d-none d-lg-block">
					  <i class="fal fa-times"></i>
				  </a>
		    	<?php include 'template-parts/card-content-sonos.php' ?>
			  </div>
		  </div>
	  </div>
		<?php include 'template-parts/footer.php' ?>
		
    <script src="dist/script-min.js"></script>
  </body>
</html>