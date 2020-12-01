<?php
require_once '../src/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php getMetaData('Contact Us', 'css-v*.css'); ?>
</head>
<body>

	<?php getNavigationBar(); ?>

	<div class="backGroundImages vertically-align-mid">
		<img src="images/Contact-us-page-header.png">
	</div>
	<div class="py-3 boxShadow">
		<div class="midIcons mx-auto">
			<img src="images/Contact us page Icon-1.svg">
		</div>
		<h1 class="">Neem Contact Op</h1>
		<h3 class="mb-5 text-center h3Main mx-auto">Heeft u vragen over onze diensten of behoefte aan vakkundig advies? Heeft u (ver-)bouwplannen of bent u toe aan een nieuwe badkamer of toilet? Graag uitnodigen wij u uit om contact met ons op te nemen.</h3>
		<h3 class="mb-5 text-center h3Main mx-auto">Wij hebben al vele mooie “droom” badkamers mogen realiseren over geheel Nederland, o.a. Regio Utrecht, Zuid-Holland, etc. Wij helpen u natuurlijk graag! Neem vrijblijvend telefonisch contact met ons op  <mark class="latoBold">0851302688</mark>  of stuur ons een e-mail bericht info@badinstallaties.nl</h3>
	</div>
	<div class="contactUsMainSection mx-auto my-5 vertically-align-mid">
		<div class="leftContact">
			<h1 class="colBlack text-left">Contact Us</h1>
			<h4 class="colBlack text-left my-3">Do not hesitate to contact us in case you have questions. We will do our utmost best to answer your questions within <mark class="latoBold">48</mark> hours.</h4>
			<form id="contact_us">
				<input type="text" name="" class="w-100 form-control-lg borderForInputs borderRadius pl-2 mb-3" placeholder="Name">
				<input type="email" name="" class="w-100 form-control-lg borderForInputs borderRadius pl-2 mb-3" placeholder="Email">
				<textarea rows="5" class="w-100 borderForInputs borderRadius pl-2 mb-4"></textarea>
				<div class="contactUsButton pr-0 ml-auto">
					<button type="submit" name="" class="w-100 form-control-lg backColGray borderRadius border-0 text-left colWhite">SEND</button>
					<div class="sendIcon posAbs">
	  					<img src="images/ContactUsIcon.svg">
	  				</div>
				</div>
			</form>
		</div>
		<div class="ml-5 rightContact">
			<h3 class="colBlack mt-2 pt-2 ml-auto text-left">Construction company</h3>
			<h3 class="colBlack mb-3 ml-auto text-left"><b><mark class="latoBold">123</mark> BADKAMERS</b></h3>
			<h3 class="colBlack ml-auto text-left">Construction of Commerce: <b class="latoBold">72823259</b></h3>
			<h3 class="colBlack ml-auto text-left mb-3">VAT: <b class="latoBold">NL223096027B02</b></h3>
			<div class="telNumAndAdress">
				<div class="vertically-align-mid justify-content-start mb-2">
					<i class="fas fa-map-marker-alt fa-2x colPink text-left mr-3"></i>
					<h3 class="colBlack mx-0 text-left">Industriewag <b class="latoBold">6 11 2712</b> LB Zoetermeer</h3>
				</div>
				<div class="vertically-align-mid justify-content-start">
					<i class="fas fa-mobile-alt fa-lg mr-2 fa-2x"></i>
					<h3 class="colBlack text-left"><b class="latoBold">+31 (0) 85-1301581</b></h3>
				</div>
			</div>
		</div>
	</div>

<?php getFooter(); ?>
<?php getJavascript('js-v*.js'); ?>
</body>
</html>