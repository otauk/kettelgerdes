			<footer>
				<div class="row darkearth benefit">
				<div class="container">
					<div class="col-md-2">
						<h3>Navigation</h3>
						<ul>
							<li><a href="#home">Home</a></li>
							<li><a href="">Naturstein</a></li>
							<li><a href="index.php#unternehmen">Unternehmen</a></li>
							<li><a href="index.php#galerie">Galerie</a></li>
							<li><a href="index.php#service">Service</a></li>
							<li><a href="impressum.php">Impressum</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h3>Wohnen</h3>
						<ul>
							<li><a href="wohnen.php#bad">Bad</a></li>
							<li><a href="wohnen.php#kueche">Küche</a></li>
							<li><a href="wohnen.php#treppen">Treppen</a></li>
							<li><a href="wohnen.php#boeden_und_fenster">Böden</a></li>
							<li><a href="wohnen.php#aussenbereich">Terassen</a></li>
							<li><a href="wohnen.php#aussenbereich">Fensterbänke</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h3>Architektur</h3>
						<ul>
							<li><a href="architektur.php#terrassen">Terassen</a></li>
							<li><a href="architektur.php#gebaeude">Öffentliche Gebäude</a></li>
							<li><a href="architektur.php#gewerbe">Gewerbe</a></li>
							<li><a href="architektur.php#fassaden">Fassaden</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h3>Bildhauerei</h3>
						<ul>
							<li><a href="bildhauerei.php#skulpturen">Skulpturen</a></li>
							<li><a href="bildhauerei.php#brunnen">Brunnen</a></li>
							<li><a href="bildhauerei.php#grabmale">Grabmale</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h3 class="highlight">Kettelgerdes Marmor <br />GmbH & Co. KG</h3>
						<p>
							Schwalbenweg 15<br />
							33129 Delbrück<br />
							Tel: 05250|9377-0<br />
							Fax: 05250|9377-10<br />
							<a href="mailto:info@kettelgerdes.de">info@kettelgerdes.de</a><br />
						</p>
					</div>
					<div class="col-md-2">
						<h3 class="highlight">Öffnungszeiten</h3>
						<p>
							Mo-Fr	: 8.00 - 17.00 Uhr<br />
							Sa      	: 9.00 - 12.00 Uhr
						</p>
						<h3 class="highlight">Social Media</h3>
							<img src="./img/icons/facebook.png" alt="Facebook">
							<img src="./img/icons/instagram.png" alt="Instagram">
							<img src="./img/icons/pinterest.png" alt="Pinterest">
						</p>
					</div>
				</div>
				</div>
			</footer>
		</div><!-- /container -->
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/imagesloaded.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/AnimOnScroll.js"></script>
		<script src="js/accordion.js"></script>
		<script src="js/lightbox.min.js"></script>
		<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );

$(document).ready(function() {
  $('.slideControls').on('click', 'button', function(){
    $(".slideContent").css("transform","translateX("+$(this).index() * -33.3333333333333333333333+"%)");
    $(".slideControls button").removeClass("selected");
    $(this).addClass("selected");
  });
});

$(function(){$('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');if(target.length){$('html, body').animate({scrollTop:target.offset().top-50},1000)
return false;}}});});
		</script>
	</body>
</html>
