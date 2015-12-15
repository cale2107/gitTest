<?php
    $page = 'home';
    include('header.php');
?>

	<header>
		<div class="top blue-top">
			<div class="clearfix wrapper">
<!-- 				<ul class="left">
					<li class="phone">011/234 22 11</li>
					<li class="mob">066/721 434</li>
					<li class="email"><a href="mailto:info@plusplus.rs">info@plusplus.rs</a></li>
				</ul> -->
				
			</div>
			<a href="https://www.facebook.com/PlusPlusDOO/?fref=nf" class="fb right">Facebook</a>
			<a href="#" class="twt right">Twitter</a>
			<a href="#" class="ins right">Instagram</a>
		</div><!-- / Top -->
		<a href="#" class="logo">PlusPlus</a>
		<nav>
			<ul>
				<li class="home"><a href="#">POČETNA</a></li>
				<li class="about"><a href="o-nama.php">O NAMA</a></li>
				<li class="brands"><a href="brendovi.php">BRENDOVI</a></li>
				 <li class="events"><a href="dogadjaji.php">DOGAĐAJI</a></li>
				 <li class="faq"><a href="pet_zona_plus.php">PET ZONA PLUS</a></li>
				<!-- <li class="faq"><a href="#">PITANJA</a></li> -->
				<!-- <li class="cooperation"><a href="saradnja-sa-uvmps.php">SARADNJA SA UVMPS</a></li> -->
				<li class="contact"><a href="kontakt.php">KONTAKT</a></li>
			</ul>
		</nav>
	</header>

	<div class="home-banner">
		<ul class="top-slider slider" data-cycle-slides="li" data-cycle-fx="scrollHorz" data-cycle-speed="300" data-cycle-swipe=true>
			<li style="background-image:url(pictures/slider-img-1.jpg)"></li>
			<li style="background-image:url(pictures/slider-img-2.jpg)"></li>
			<li style="background-image:url(pictures/slider-img-3.jpg)"></li>
		</ul>
		<div class="main-cats">
			<ul class="wrapper clearfix">
				<li class="prod">
					<div>
						<img src="pictures/thumb-1.jpg" alt>
						<p>SEKCIJA ZA VLASNIKE RADNJI ZA KUĆNE LJUBIMCE</p>
						<a href="#" class="more">POGLEDAJ</a>
					</div>
					<h3>KUĆNI LJUBIMCI</h3>
				</li>
				<li class="odg">
					<div>
						<img src="pictures/thumb-1.jpg" alt>
						<p>SEKCIJA ZA VLASNIKE RADNJI ZA KUĆNE LJUBIMCE</p>
						<a href="#" class="more">POGLEDAJ</a>
					</div>
					<h3>ODGAJIVAČI</h3>
				</li>
				<li class="vlas">
					<div>
						<img src="pictures/thumb-1.jpg" alt>
						<p>SEKCIJA ZA VLASNIKE RADNJI ZA KUĆNE LJUBIMCE</p>
						<a href="vlasnici.php" class="more">POGLEDAJ</a>
					</div>
					<h3>VETERINAR</h3>
				</li>
			</ul>
		</div>
	</div><!-- / Home banner -->
	
	<div class="wrapper">
		

	<ul class="about-info equal-columns">
        	<li>
            	<h3>MI SMO</h3>
                <p>tim profesionalaca i ljubitelja životinja, okupljeni da bismo ispunili zajedničku poslovnu i ličnu misiju.</p>
        	</li>
        	<li>
            	<h3>NAŠA MISIJA</h3>
                <p>je da vlasnicima kućnih ljubimaca pružimo najbolju uslugu kroz obezbeđivanje dostupnosti kvalitetnih proizvoda.</p>
        	</li>
        	<li>
            	<h3>ONO ŠTO NAS POKREĆE</h3>
                <p>je činjenica da svojim delanjem svakoga dana doprinosimo kvalitetu života sve većeg broja kućnih ljubimaca.</p>
        	</li>
		</ul>
			
		<!--<div class="featured-box bgr-dog">
			<p>Preduzeće P.D. PlusPlus d.o.o. je osnovano 2000. godine.</p>
			<p>Naša osnovna delatnost je uvoz, distribucija i veleprodaja hrane i opreme za pse i druge kućne ljubimce. Počeli smo kao ekskluzivni distributer proizvođača dehidrirane hrane za pse i mačke <strong>Farmina Pet Foods Ltd.</strong> i direktno smo učestvovali u projektu dovođenja ovog renomiranog proizvođača u Republiku Srbiju i izgradnji proizvodnog pogona <strong>Farmina Pet Foods Ltd.</strong> u Inđiji.</p>
		</div><!-- / Featured box -->
		
		<div class="slider-box logo-slider">
			<h2>BRENDOVI</h2>
			<ul class="logo-list">
				<li><a href="http://www.farmina.com/sr" target="_blank" ><img src="pictures/logos/farmina.jpg"></a></li>
				<li><a href="http://www.naturediet.co.uk/" target="_blank"><img src="pictures/logos/naturediet.jpg"></a></li>
				<li><a href="http://www.dr-alder.de/" target="_blank"><img src="pictures/logos/dralder.jpg"></a></li>
				<li><a href="http://www.pethead.com/" target="_blank"><img src="pictures/logos/pethead.jpg"></a></li>
				<li><a href="http://www.croci-group.com/en/index.php" target="_blank"><img src="pictures/logos/croci.jpg"></a></li>
				<li><a href="http://www.croci-group.com/en/index.php" target="_blank"><img src="pictures/logos/croci.jpg"></a></li>
				<li><a href="http://www.dr-alder.de/" target="_blank"><img src="pictures/logos/dralder.jpg"></a></li>
				<li><a href="http://www.farmina.com/sr" target="_blank"><img src="pictures/logos/farmina.jpg"></a></li>
				<li><a href="http://www.pethead.com/" target="_blank"><img src="pictures/logos/pethead.jpg"></a></li>
				<li><a href="http://www.croci-group.com/en/index.php" target="_blank"><img src="pictures/logos/croci.jpg"></a></li>
			</ul>
		</div><!-- / Logo slider box -->
		
		<div class="promo-box car-bgr">
			<p>Našim partnerima, pored proizvoda pomenutih proizvođača, nudimo i besplatnu dostavu robe na celoj teritoriji Republike Srbije. U mogućnosti smo da robu dostavimo u roku od 24h od prijema porudžbine.</p>
		</div><!-- / Promo box -->
		
		<div class="slider-box logo-slider">
			<h2>NAJPOPULARNIJI PROIZVODI</h2>
			<ul class="product-slider">
				<li class="product-item">
					<figure><a href="pictures/thumb-2-large.jpg" title="Gumena koska Ferribiella" rel="prod" class="thumb fancybox"><img src="pictures/thumb-2.jpg"></a></figure>
					<div class="details">
						<h4>Dirty Talk - šampon Pet Head</h4>
						<p>grain free  hrana za pse piletina i nar 2,5kg</p>
						<a href="#gdekupiti" class="more fancybox">GDE KUPITI ?</a>
					</div>
				</li>
				<li class="product-item">
					<figure><a href="pictures/thumb-2-large.jpg" rel="prod" class="thumb fancybox"><img src="pictures/thumb-3.jpg"></a></figure>
					<div class="details">
						<h4>Dirty Talk - šampon Pet Head</h4>
						<p>grain free  hrana za pse piletina i nar 2,5kg</p>
						<a href="#gdekupiti" class="more fancybox">GDE KUPITI ?</a>
					</div>
				</li>
				<li class="product-item">
					<figure><a href="pictures/thumb-2-large.jpg" rel="prod" class="thumb fancybox"><img src="pictures/thumb-4.jpg"></a></figure>
					<div class="details">
						<h4>Dirty Talk - šampon Pet Head</h4>
						<p>grain free  hrana za pse piletina i nar 2,5kg</p>
						<a href="#gdekupiti" class="more fancybox">GDE KUPITI ?</a>
					</div>
				</li>
				<li class="product-item">
					<figure><a href="pictures/thumb-2-large.jpg" rel="prod" class="thumb fancybox"><img src="pictures/thumb-5.jpg"></a></figure>
					<div class="details">
						<h4>Dirty Talk - šampon Pet Head</h4>
						<p>grain free  hrana za pse piletina i nar 2,5kg</p>
						<a href="#gdekupiti" class="more fancybox">GDE KUPITI ?</a>
					</div>
				</li>
				<li class="product-item">
					<figure><a href="pictures/thumb-2-large.jpg" rel="prod" class="thumb fancybox"><img src="pictures/thumb-3.jpg"></a></figure>
					<div class="details">
						<h4>Dirty Talk - šampon Pet Head</h4>
						<p>grain free  hrana za pse piletina i nar 2,5kg</p>
						<a href="#gdekupiti" class="more fancybox">GDE KUPITI ?</a>
					</div>
				</li>
				<li class="product-item">
					<figure><a href="pictures/thumb-2-large.jpg" rel="prod" class="thumb fancybox"><img src="pictures/thumb-4.jpg"></a></figure>
					<div class="details">
						<h4>Dirty Talk - šampon Pet Head</h4>
						<p>grain free  hrana za pse piletina i nar 2,5kg</p>
						<a href="#gdekupiti" class="more fancybox">GDE KUPITI ?</a>
					</div>
				</li>
			</ul>
		</div><!-- / Products slider box -->
		
		<div class="hide">
			<div id="gdekupiti" class="popup-content">
				<h3>GDE KUPITI?</h3>
				<ul class="locations">
					<li>
						<p><strong>PlusPlus - Beograd</strong></p>
						<p>Radno vreme: 9 - 17h<br>
						Subotom: 9 - 14h</p>
						<p>(0) 11 313 9800<br>
						(0) 11 314 8671</p>
						<p><a href="mailto:office@plusplus.co.rs">office@plusplus.co.rs</a></p>
					</li>
					<li>
						<p><strong>PlusPlus -Novi Sad</strong></p>
						<p>Radno vreme: 9 - 17h<br>
						Subotom: 9 - 14h</p>
						<p>(0)21 640 3347<br>
						(0)60 000 0000</p>
						<p><a href="mailto:office.ns@plusplus.co.rs">office.ns@plusplus.co.rs</a></p>
					</li>
					<li>
						<p><strong>PlusPlus - Niš</strong></p>
						<p>Radno vreme: 9 - 17h<br>
						Subotom: 9 - 14h</p>
						<p>(0)18 428 5511<br>
						(0) 11 314 8671</p>
						<p><a href="mailto:office.ni@plusplus.co.rs">office.ni@plusplus.co.rs</a></p>
					</li>
				</ul>
				<h4>Molimo Vas da kontaktirate najbližu filijalu radi informacija gde u vašem gradu možete kupiti ove proizvode.</h4>
			</div>
		</div><!-- / Gde kupiti popup -->
		
	</div><!-- / Wrapper -->
	
	<div class="search-bar">
		<div class="wrapper clearfix">
			<p>Nova i inovativna linija suve hrane za pse i mačke, Natural & Delicious,<br>
			se temelji na šest osnovnih principa ishrane mesojeda...</p>
			<fieldset>
				<input type="text" placeholder="Unesite termin za pretragu">
				<input type="submit" valie="Go">
			</fieldset>
		</div>
	</div><!-- / Search bar -->
	
	<div class="two-columns clearfix wrapper">
		<div class="column newsletter">
			<h3>BUDITE U TOKU</h3>
			<p>Prijavite se za naš email bilten kako bi bili na vreme informisani o svim događajima i ponudama koje vam pružamo.</p>
			<fieldset>
				<input placeholder="Vaša email adresa" type="text" class="left">
				<input type="submit" value="Prijavi se" class="right">
			</fieldset>
		</div>
		<div class="column">
			<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FPlusPlusDOO&amp;width=450&amp;height=190&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:190px;" allowTransparency="true"></iframe>
		</div>
	</div><!-- / 2 columns -->
	
<?php include('footer.php'); ?>