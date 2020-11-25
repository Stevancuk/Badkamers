<?php
require_once '../src/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php getMetaData('Landing', 'css-v*.css'); ?>
</head>
<body>

	<?php getNavigationBar(); ?>

	<div class="backGroundImages vertically-align-mid">
		<img src="images/Badkamerslandingpage.png">
		<div class="headerText backColBlackOpacity">
			<h3 class="colWhite text-left mx-5 mt-3"><mark class="backColTransparent colWhite mark1">Plannen voor badkamer renovatie?</mark> <mark class="backColTransparent colWhite mark2">De specialisten van badinstallaties regelen alles voor u. Door creatieve badkamer ideeën en slimme oplossingen, realiseren we voor iedere badkamer een complete renovatie.</mark> <mark class="backColTransparent colWhite mark3">Van ontwerp tot montage Uw volledige badkamer renoveren?</mark> <mark class="backColTransparent colWhite mark4">Dat kan! Maar ook met kleine aanpassingen krijgt uw badkamer een volledig nieuwe look.</mark> <mark class="backColTransparent colWhite mark5">Het team van badinstallaties regelt alles voor.</mark></h3>
			<div class="borderWhite knowingMore my-3 ml-5"><h3 class="colWhite py-1 text-center"><a class="colWhite" href="renovatie.php">Meer weten</a></h3></div>
			<div class="relDivForWhiteLines">
				<div class="verticalWhiteLine1 backColWhite"></div>
				<div class="verticalWhiteLine2 backColWhite"></div>
			</div>
		</div>	
	</div>
	<div class="landingSection1 backgroundPar">
		<div class="backColBlackOpacity w-100 h-100">
			<div class="midIcons mx-auto pt-5">
				<img src="images/Cranes2.svg">
			</div>
	    	<h1 class="colWhite">Over Ons</h1>
	    	<h3 class="colWhite text-center h3Main mx-auto py-3">Daar waar de badkamer vroeger niet meer dan een wasruimte was, is het nu dé ruimte in huis om in te ontspannen en uitgebreid aandacht te geven aan persoonlijke verzorging. Herkent u dit? Wilt u uw badkamer verbouwen om nog meer comfort toe te passen, zodat u ongestoord tot rust kunt komen? Bij het badkamer verbouwen en badkamer ontwerpen houdt Badinstallaties rekening met design, maar functionaliteit en de zekerheid van een vakkundige badkamer installatie en afwerking zijn daarbij even zo belangrijk.</h3>
	    	<h3 class="colWhite text-center h3Main mx-auto py-3">Badinstallaties heeft al meer dan 12 jaar ervaring met het ontwerpen, verbouwen, en volledige nieuwbouw van badkamers en sanitaire ruimtes.</h3>
	    </div>
	</div>
	<!-- <div class="overLayerOpacity2 backColWhite">
		<div class="vertically-align-mid w-100 mx-auto sqarewWindowsMain">
			<div class="vertically-align-mid">
				<div class="posRel imageOptionsMain px-0">
					<div class="overLayerOpacity3 backColBlackOpacity">
						<h2 class="text-center colWhite my-2">MODERNE BADKAMERS</h2>
						<div class="mx-auto borderWhite knowingMore"><h3 class="colWhite text-center py-1"><a class="colWhite" href="Inspiration_page_2.php">Meer weten</a></h3></div>
					</div>
					<div class="overflow-hidden borderCream posRel imageGrid mx-auto vertically-align-mid">
						<img class="zoomOnHover" src="images/1.png">
					</div>
				</div>
				<div class="posRel imageOptionsMain px-0">
					<div class="overLayerOpacity3 backColBlackOpacity">
						<h2 class="text-center colWhite my-2">KLASSIEKE BADKAMERS</h2>
						<div class="mx-auto borderWhite knowingMore"><h3 class="colWhite text-center py-1"><a class="colWhite" href="Inspiration_page_3.php">Meer weten</a></h3></div>
					</div>
					<div class="overflow-hidden borderCream posRel imageGrid mx-auto vertically-align-mid">
						<img class="zoomOnHover" src="images/2.png">
					</div>
				</div>
			</div>
			<div class="vertically-align-mid">
				<div class="posRel imageOptionsMain px-0">
					<div class="overLayerOpacity3 backColBlackOpacity">
						<h2 class="text-center colWhite my-2">LUXE BADKAMERS</h2>
						<div class="mx-auto borderWhite knowingMore"><h3 class="colWhite text-center py-1"><a class="colWhite" href="Inspiration_page_4.php">Meer weten</a></h3></div>
					</div>
					<div class="borderCream posRel imageGrid mx-auto vertically-align-mid">
						<img class="zoomOnHover" src="images/3.png">
					</div>
				</div>
				<div class="posRel imageOptionsMain px-0">
					<div class="overLayerOpacity3 backColBlackOpacity">
						<h2 class="text-center colWhite my-2">LENDELIJKE BADKAMERS</h2>
						<div class="mx-auto borderWhite knowingMore"><h3 class="colWhite text-center py-1"><a class="colWhite" href="Inspiration_page_5.php">Meer weten</a></h3></div>
					</div>
					<div class="borderCream posRel imageGrid mx-auto vertically-align-mid">
						<img class="zoomOnHover" src="images/4.png">
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  	<ol class="carousel-indicators">
	    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	    	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
	  	</ol>
	  	<div class="carousel-inner">
	  		<div class="backColBlack sliderTextAndComment w-100">
	  			<div class="vertically-align-mid w-75 mx-auto py-3 sliderTextAndCommentSubb">
	  				<h1 class="colWhite mr-auto">Customers we are proud of</h1>
	  				<div class="vertically-align-mid iconCommentCarusel">
	  					<div class="commentIcon">
	  						<img src="images/ContactUsIcon.svg">
	  					</div>
	  					<h2 class="colWhite ml-4">Leave a comment</h2>
	  				</div>
	  			</div>
	  		</div>
	    	<div class="carousel-item active">
	      		<div class="caruselInnerMain vertically-align-mid backColBlack">
	      			<div class="colBlack backColCream caruselInnerSub mx-auto">
	      				<div class="vertically-align-mid mt-4  mx-5 mb-5 justify-content-between imgAndTextCarusel">
	      					<div class="imgDivCarousel borderYellow vertically-align-mid">
	      						<img src="">
	      					</div>
	      					<h2 class="colBlack namesEleCarusel">Anna and Bryan</h2>
	      					<div class="imgDivCarousel"></div>
	      				</div>
	      				<h3 class="text-left mx-5 textInSlider">Plannen voor badkamer renovatie? De specialisten van badinstallaties regelen alles voor u. <mark class="colBlack backColTransparent markCarusel1">Door creatieve badkamer ideeën en slimme oplossingen, realiseren we voor iedere badkamer een complete renovatie. Van ontwerp tot montage Uw volledige badkamer renoveren? Dat kan! Maar ook met kleine aanpassingen krijgt uw badkamer een volledig nieuwe look. Het team van badinstallaties regelt alles voor.</mark></h3>
	      			</div>
	      		</div>
	    	</div>
	    	<div class="carousel-item">
	      		<div class="caruselInnerMain vertically-align-mid backColBlack">
	      			<div class="colBlack backColCream caruselInnerSub mx-auto">
	      				<div class="vertically-align-mid mt-4  mx-5 mb-5 justify-content-between imgAndTextCarusel">
	      					<div class="imgDivCarousel borderYellow vertically-align-mid">
	      						<img src="">
	      					</div>
	      					<h2 class="colBlack namesEleCarusel">Anna and Bryan</h2>
	      					<div class="imgDivCarousel"></div>
	      				</div>
	      				<h3 class="text-left mx-5 textInSlider">Plannen voor badkamer renovatie? De specialisten van badinstallaties regelen alles voor u. <mark class="colBlack backColTransparent markCarusel1">Door creatieve badkamer ideeën en slimme oplossingen, realiseren we voor iedere badkamer een complete renovatie. Van ontwerp tot montage Uw volledige badkamer renoveren? Dat kan! Maar ook met kleine aanpassingen krijgt uw badkamer een volledig nieuwe look. Het team van badinstallaties regelt alles voor.</mark></h3>
	      			</div>
	      		</div>
	    	</div>
	    	<div class="carousel-item">
	      		<div class="caruselInnerMain vertically-align-mid backColBlack">
	      			<div class="colBlack backColCream caruselInnerSub mx-auto">
	      				<div class="vertically-align-mid mt-4  mx-5 mb-5 justify-content-between imgAndTextCarusel">
	      					<div class="imgDivCarousel borderYellow vertically-align-mid">
	      						<img src="">
	      					</div>
	      					<h2 class="colBlack namesEleCarusel">Anna and Bryan</h2>
	      					<div class="imgDivCarousel"></div>
	      				</div>
	      				<h3 class="text-left mx-5 textInSlider">Plannen voor badkamer renovatie? De specialisten van badinstallaties regelen alles voor u. <mark class="colBlack backColTransparent markCarusel1">Door creatieve badkamer ideeën en slimme oplossingen, realiseren we voor iedere badkamer een complete renovatie. Van ontwerp tot montage Uw volledige badkamer renoveren? Dat kan! Maar ook met kleine aanpassingen krijgt uw badkamer een volledig nieuwe look. Het team van badinstallaties regelt alles voor.</mark></h3>
	      			</div>
	      		</div>
	    	</div>
	    	<div class="carousel-item">
	      		<div class="caruselInnerMain vertically-align-mid backColBlack">
	      			<div class="colBlack backColCream caruselInnerSub mx-auto">
	      				<div class="vertically-align-mid mt-4  mx-5 mb-5 justify-content-between imgAndTextCarusel">
	      					<div class="imgDivCarousel borderYellow vertically-align-mid">
	      						<img src="">
	      					</div>
	      					<h2 class="colBlack namesEleCarusel">Anna and Bryan</h2>
	      					<div class="imgDivCarousel"></div>
	      				</div>
	      				<h3 class="text-left mx-5 textInSlider">Plannen voor badkamer renovatie? De specialisten van badinstallaties regelen alles voor u. <mark class="colBlack backColTransparent markCarusel1">Door creatieve badkamer ideeën en slimme oplossingen, realiseren we voor iedere badkamer een complete renovatie. Van ontwerp tot montage Uw volledige badkamer renoveren? Dat kan! Maar ook met kleine aanpassingen krijgt uw badkamer een volledig nieuwe look. Het team van badinstallaties regelt alles voor.</mark></h3>
	      			</div>
	      		</div>
	    	</div>
	    	<div class="carousel-item">
	      		<div class="caruselInnerMain vertically-align-mid backColBlack">
	      			<div class="colBlack backColCream caruselInnerSub mx-auto">
	      				<div class="vertically-align-mid mt-4  mx-5 mb-5 justify-content-between imgAndTextCarusel">
	      					<div class="imgDivCarousel borderYellow vertically-align-mid">
	      						<img src="">
	      					</div>
	      					<h2 class="colBlack namesEleCarusel">Anna and Bryan</h2>
	      					<div class="imgDivCarousel"></div>
	      				</div>
	      				<h3 class="text-left mx-5 textInSlider">Plannen voor badkamer renovatie? De specialisten van badinstallaties regelen alles voor u. <mark class="colBlack backColTransparent markCarusel1">Door creatieve badkamer ideeën en slimme oplossingen, realiseren we voor iedere badkamer een complete renovatie. Van ontwerp tot montage Uw volledige badkamer renoveren? Dat kan! Maar ook met kleine aanpassingen krijgt uw badkamer een volledig nieuwe look. Het team van badinstallaties regelt alles voor.</mark></h3>
	      			</div>
	      		</div>
	    	</div>
	  	</div>
	  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    	<i class="fas fa-chevron-left fa-5x colWhite indicatorsWidth" aria-hidden="true"></i>
	    	<span class="sr-only">Previous</span>
	  	</a>
	  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    	<i class="fas fa-chevron-right fa-5x colWhite indicatorsWidth" aria-hidden="true"></i>
	    	<span class="sr-only">Next</span>
	  	</a>
	</div>
	<!-- <img src="images/futureProofBath.jpg"> -->
	<div class="landingSection2 backgroundPar">
		<div class="backColBlackOpacity w-100 h-100">
			<div class="midIcons mx-auto pt-5">
				<img src="images/futureproofbathroomspageicon-1.svg">
			</div>
			<h1 class="colWhite">Toekomst bestendige badkamer</h1>
			<h3 class="colWhite text-center h3Main mx-auto py-3">De laatste jaren wordt er steeds meer van de Nederlander verwacht zelfredzaam te zijn en te blijven. Dit betekent  dat u nu of in de toekomst  langer in uw eigen woning moet blijven wonen. De kleine dingen die nu nog gemakkelijk gaan, zullen  lastiger of soms zelfs onmogelijk worden zullen als u op leeftijd begint te.</h3>
			<div class="knowingMore borderWhite mx-auto mt-5">
				<h3 class="colWhite text-center py-1"><a class="colWhite" href="#">Meer weten</a></h3>
			</div>
		</div>
	</div>	
	<div class="overLayerOpacity2 backColWhite boxShadow">
		<h1 class="colBlack text-center mt-3">Merken</h1>
		<h3 class="colBlack mx-auto h3Main text-center mb-5">Onderstaande merken worden door Badinstallaties veelal gebruikt. De getoonde merken staan voor kwaliteit en duurzaam en gaan uw leven lang mee. Staat het door u gevonden merk er niet tussen, vrees niet. Wij kunnen u altijd verder helpen.</h3>
		<div class="vertically-align-mid mx-auto justify-content-between mainBrandLogos pt-5">
			<div class="imgBrandLogos borderCream vertically-align-mid">
				<img src="images/1.jpg">
			</div>
			<div class="imgBrandLogos borderCream vertically-align-mid">
				<img src="images/2.jpg">
			</div>
			<div class="imgBrandLogos borderCream vertically-align-mid">
				<img src="images/3.jpg">
			</div>
		</div>
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