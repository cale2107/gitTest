<?php
    $page = 'home';
    include('header.php');
?>

	<header>
		<div class="top blue-top">
			<div class="clearfix wrapper">
            	<ul class="category-nav left">
                	<li class="blue">
                    	<a href="#">Kategorije</a>
                        <ul>           
                        	<li class="green"><a href="#">Prodavci</a></li>
                        	<li class="pink"><a href="#">Odgajivači</a></li>
                        	<li class="orange"><a href="#">Vlasnici</a></li>
                        </ul>
                    </li>
                </ul>
				<ul class="left">
					<li class="phone">011/234 22 11</li>
					<li class="mob">066/721 434</li>
					<li class="email"><a href="mailto:info@plusplus.rs">info@plusplus.rs</a></li>
				</ul>
				<a href="#" class="fb right">Facebook</a>
			</div>
		</div><!-- / Top -->
		<a href="#" class="logo">PlusPlus</a>
		<nav>
			<ul>
				<li class="home"><a href="#">POČETNA</a></li>
				<li class="about"><a href="#">O NAMA</a></li>
				<li class="brands"><a href="#">BRENDOVI</a></li>
				<li class="events"><a href="#">DOGAĐAJI</a></li>
				<li class="faq"><a href="#">PITANJA</a></li>
				<li class="cooperation"><a href="#">SARADNJA SA UVMPS</a></li>
				<li class="contact"><a href="#">KONTAKT</a></li>
			</ul>
		</nav>
	</header>

	<div class="wrapper not-found">
		<div>
        	<h1>GREŠKA: 404!</h1>
            <p>
            	Stranica koju ste tražili ne postoji ili je došlo do greške na serveru.<br />
				Molimo Vas, <a href="#">vratite se nazad</a>. 
 			</p>
        </div>
        <div>
        	<p>
                Kad ste već ovde, možete pogledati kako ostajem u formi:<br />
                <a href="#video" class="fancybox">grain free Farmina Pet Foods</a>
            </p>
        </div>
	</div><!-- / Wrapper -->
	
		<div class="hide">
			<div id="video" class="popup-content" data-video="//www.youtube.com/embed/Jx__vtgiW1Q">
			</div>
		</div><!-- / Vide popup -->
	
<?php include('footer.php'); ?>