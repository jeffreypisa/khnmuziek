<div id="content" class="card card-content">
	<div class="card-body">
  	<h1 class="h5"> Bestel KHN Muziek </h1>
  	<p> KHN Muziek is direct af te sluiten voor KHN leden </p>  
		<ol>
			<li>Klik hier op het abonnement van je voorkeur </li>
			<li>Vul je KHN lidnummer en gegevens in </li>
			<li>Selecteer de gewenste betaalmodule </li>
			<li>Klik op naar de betaalmodule </li>
		</ol>
		<form class="abonnementform">
			<div class="btn-group-toggle mb-3" data-toggle="buttons">
				<div class="form-row">
					<div class="col-md">
					  <label class="btn btn-block btn-secondary active">
					    <input type="radio" name="abonnement" id="jaar" autocomplete="off" class="d-none" checked> 
					    Jaar abbonnement <br>
					    <strong> €169,95 excl. BTW </strong> <br>
					    Inclusief certificaat
					  </label>
					</div>
					<div class="col-md">
					  <label class="btn btn-block btn-secondary">
					    <input type="radio" name="abonnement" id="maand" autocomplete="off" class="d-none"> 
					    Maand abbonnement <br>
					    <strong> €169,95 excl. BTW </strong> <br>
					    Inclusief certificaat
					  </label>
					</div>
				</div>
			</div>
		  <div class="form-row">
		    <div class="col-md-6 mb-3">
		      <label for="Lidnummer" class="d-none">Lidnummer</label>
		      <input type="text" class="form-control" placeholder="Lidnummer" id="Lidnummer" value="" required>
		      <div class="valid-feedback"><!-- add class 'd-block' to show validation message -->
		        Juist Lidnummer
		      </div>
		    </div>
		    <div class="col-md-6 mb-3">
		      <label for="Postcode" class="d-none">Postcode</label>
		      <input type="text" class="form-control" placeholder="Postcode" id="Postcode" required>
		      <div class="invalid-feedback"><!-- add class 'd-block' to show validation message -->
		        Onjuiste postcode
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="Email" class="d-none">E-mailadres</label>
		    <input type="email" class="form-control" placeholder="E-mailadres" id="Email" required>
		    <div class="valid-feedback"><!-- add class 'd-block' to show validation message -->
	        Juist e-mailadres
	      </div>
		  </div>
		  <div class="btn-group-toggle mb-3" data-toggle="buttons">
			  <label class="mb-3" for="payment">Kies betaalmethode</label>
				<div class="row no-gutters">
					<div class="col-auto d-flex align-items-center">
					  <label class="btn btn-image">
					    <input type="radio" name="payment" id="ideal" autocomplete="off" class="d-none"> 
					   <img src="../dist/images/ideal.png" alt="ideal" width="117" height="102" />
					  </label>
					</div>
					<div class="col-auto d-flex align-items-center">
					  <label class="btn btn-image">
					    <input type="radio" name="payment" id="visa" autocomplete="off" class="d-none"> 
					    <img src="../dist/images/visa.png" alt="visa" width="159" height="102" />
					  </label>
					</div>
					<div class="col-auto d-flex align-items-center">
					  <label class="btn btn-image">
					    <input type="radio" name="payment" id="mastercard" autocomplete="off" class="d-none"> 
					    <img src="../dist/images/mastercard.png" alt="mastercard" width="130" height="102" />
					  </label>
					</div>
					<div class="col-auto d-flex align-items-center">
					  <label class="btn btn-image">
					    <input type="radio" name="payment" id="paypal" autocomplete="off" class="d-none"> 
					    <img src="../dist/images/paypal.png" alt="paypal" width="122" height="110" />
					  </label>
					</div>
				</div>
			</div>
			<p> De eerste betaling is het startpunt van een doorlopende betaalovereenkomst. Kortom, op basis van deze gegevens wordt de periodieke incasso uitgevoerd. </p>
		  <a href="" class="btn btn-primary btn-arrow disabled"> Naar de betaalmodule </a> <!-- remove class 'disabled' for active state -->
		</form>
	</div>
</div>