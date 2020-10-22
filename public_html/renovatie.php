<?php
require_once '../src/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php getMetaData('Renovatie', 'css-v*.css'); ?>
</head>
<body>

	<?php getNavigationBar(); ?>

	<div class="backGroundImages">
		<img src="images/Bathroomrenovationpageheader.png">
	</div>
	<div class="backColWhite">
		<h1 class="mx-auto colBlack w-75 text-center my-4">Plans for bathroom renovation?</h1>
		<h3 class="mx-auto colBlack h3Main text-center mt-4 mb-5">Dagenlang heeft u inspiratie opgedaan, maten opgemeten en berekeningen gedaan. U bent op het punt gekomen dat u precies weet hoe u wil dat uw nieuwe badkamer vormgegeven wordt.</h3>
	</div>
	<div class="backGroundImages">
		<img src="images/photo-1482731215275-a1f151646268.jpg">
		<div class="overLayerOpacity4 backColBlackOpacity">
			<div class="midIcons mx-auto mt-3">
				<img src="images/Bathroomrenovationpageicon-1.svg">
			</div>
			<h1 class="mx-auto colWhite">From design to assembly</h1>
			<h3 class="mx-auto colWhite h3Main text-center">De laatste jaren wordt er steeds meer van de Nederlander verwacht zelfredzaam te zijn en te blijven. Dit betekent  dat u nu of in de toekomst  langer in uw eigen woning moet blijven wonen.</h3>
			<div class="w-75 mx-auto backColDarkOpacity mt-4 mb-3">
				<div class="vertically-align-mid pt-2"><div class="circleDot backColWhite"></div><h2 class="vertically-align-mid text-center colWhite ml-3">Bathroom design according to your wishes</h2></div>
				<div class="vertically-align-mid"><div class="circleDot backColWhite"></div><h2 class="vertically-align-mid text-center colWhite ml-3">Bathroom design according to your wishes</h2></div>
				<div class="vertically-align-mid"><div class="circleDot backColWhite"></div><h2 class="vertically-align-mid text-center colWhite ml-3">Bathroom design according to your wishes</h2></div>
				<div class="vertically-align-mid pb-2"><div class="circleDot backColWhite"></div><h2 class="vertically-align-mid text-center colWhite ml-3">Bathroom design according to your wishes</h2></div>
			</div>
			<h3 class="mx-auto colWhite h3Main text-center">De laatste jaren wordt er steeds meer van de Nederlander verwacht zelfredzaam te zijn en te blijven. Dit betekent  dat u nu of in de toekomst  langer in uw eigen woning moet blijven wonen.</h3>
		</div>
		<div class="overLayerOpacity2 backColWhite">
			<h1 class="colBlack text-center mb-3 mt-5">Customized bathroom</h1>
			<h3 class="colBlack mx-auto h3Main text-center mb-3">Onderstaande merken worden door Badinstallaties veelal gebruikt. De getoonde merken staan voor kwaliteit en duurzaam en gaan uw leven lang mee. Staat het door u gevonden merk er niet tussen, vrees niet. Wij kunnen u altijd verder helpen.</h3>
			<h1 class="colBlack text-center my-3">Professional installation</h1>
			<h3 class="colBlack mx-auto h3Main text-center mb-3">Onderstaande merken worden door Badinstallaties veelal gebruikt. De getoonde merken staan voor kwaliteit en duurzaam en gaan uw leven lang mee. Staat het door u gevonden merk er niet tussen, vrees niet. Wij kunnen u altijd verder helpen.</h3>
			<h3 class="colBlack mx-auto h3Main text-center">Onderstaande merken worden door Badinstallaties veelal gebruikt. De getoonde merken staan voor kwaliteit en duurzaam en gaan uw leven lang mee. Staat het door u gevonden merk er niet tussen, vrees niet. Wij kunnen u altijd verder helpen.Onderstaande merken worden door Badinstallaties veelal gebruikt. De getoonde merken staan voor kwaliteit en duurzaam en gaan uw leven lang mee. Staat het door u gevonden merk er niet tussen, vrees niet. Wij kunnen u altijd verder helpen.</h3>
		</div>
	</div>
	<div class="backColWhite">
	</div>
	<div class="row contactUsMainSection mx-auto my-5 pt-4">
		<div class="col-6">
			<h1 class="colBlack text-left">Contact Us</h1>
			<h4 class="colBlack text-left my-3">Do not hesitate to contact us in case you have questions. We will do our utmost best to answer your questions within 48 hours.</h4>
			<form id="contact_us">
				<input type="text" name="" class="w-100 form-control-lg borderForInputs borderRadius pl-2 mb-3" placeholder="Name">
				<input type="email" name="" class="w-100 form-control-lg borderForInputs borderRadius pl-2 mb-3" placeholder="Email">
				<textarea rows="5" class="w-100 borderForInputs borderRadius pl-2 mb-4"></textarea>
				<div class="col-4 pr-0 ml-auto">
					<button type="submit" name="" class="w-100 form-control-lg backColGray borderRadius border-0 text-left colWhite">SEND</button>
					<div class="sendIcon posAbs">
	  					<img src="images/ContactUsIcon.svg">
	  				</div>
				</div>
			</form>
		</div>
		<div class="col-5 ml-auto">
			<h3 class="colBlack mt-5 pt-2 ml-auto">Construction company</h3>
			<h3 class="colBlack mb-4 ml-auto">123 BADKAMERS</h3>
			<h3 class="colBlack ml-auto">Construction of Commerce: <b>72823259</b></h3>
			<h3 class="colBlack ml-auto">VAT: <b>NL223096027B02</b></h3>
			<div class="vertically-align-mid justify-content-start">
				<div class="vertically-align-mid mr-4">
					<i class="fas fa-map-marker-alt fa-2x colPink"></i>
					<div>
						<h3 class="colBlack mt-5 pt-2">Industriewag <b>6 11</b></h3>
						<h3 class="colBlack mb-4"><b>2712</b> LB Zoetermeer</h3>
					</div>
				</div>
				<div class="vertically-align-mid">
					<i class="fas fa-mobile-alt fa-lg mr-2 fa-2x"></i>
					<h3 class="colBlack text-left"><b>+31 (0) 85-1301581</b></h3>
				</div>
			</div>
		</div>
	</div>

<?php getFooter(); ?>
<?php getJavascript('js-v*.js'); ?>
</body>
</html>