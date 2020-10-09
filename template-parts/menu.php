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
  <li class="<?php if ($activepage == 'welkom') { ?> active <?php } ?>"><!-- add class 'active' for correct styling active menu item -->
	  <a href="index.php">
		  Welkom
	  </a>
  </li>
  <li class="<?php if ($activepage == 'abonnementen') { ?> active <?php } ?>">
	  <a href="abonnementen.php?scrolltocontent">
		  Abonnementen
	  </a>
  </li>
  <li class="<?php if ($activepage == 'account') { ?> active <?php } ?>">
	  <a href="account.php?scrolltocontent">
		  Account
	  </a>
  </li>
  <li class="<?php if ($activepage == 'sonos') { ?> active <?php } ?>">
	  <a href="sonos.php?scrolltocontent">
		  SONOS
	  </a>
  </li>
  <li class="last <?php if ($activepage == 'faq') { ?> active <?php } ?>">
	  <a href="faq.php?scrolltocontent">
		  FAQ
	  </a>
  </li>
  <li class="spacer d-sm-none"></li>
  <li class="d-sm-none"> 
  	<a href="content.php?scrolltocontent">
	  	Algemene voorwaarden
	  </a> 
  </li>
	<li class="d-sm-none"> 
		<a href="content.php?scrolltocontent">
			Privacy
		</a> 
	</li>
	<li class="d-sm-none"> 
		<a href="content.php?scrolltocontent">
			Colofon
		</a> 
	</li>
</ul>