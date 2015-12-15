<?php
    $page = 'home';
    include('header.php');
?>

	<header>
		<div class="top green-top">
			<div class="clearfix wrapper">
            	<ul class="category-nav left">
                	<li class="green">
                    	<a href="#">Prodavci</a>
                        <ul>
                        	<li class="pink"><a href="#">Odgajivači</a></li>
                            <li class="orange"><a href="#">Vlasnici</a></li>
                        </ul>
                    </li>
                </ul>
				<ul class="left top-nav">
					<li><a href="#">AKCIJE</li>
					<li><a href="#">IZDVOJENA PONUDA</a></li>
					<li><a href="#">SARADNJA</a></li>
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

	<div class="inner-banner" style="background-image:url(pictures/sellers-banner.jpg)"></div><!-- / Inner page banner -->
	
    <div class="breadcrumbs">
    	<ul class="clearfix">
        	<li><a href="#">Početna</a></li>
            <li><a href="#">Prodavci</a></li>
            <li><span>Saradnja</span></li>
        </ul>
    </div><!-- / Breadcrumbs -->
    
	<div class="wrapper co-op">
    
		<h1>ŽELITE DA OTVORITE PET SHOP?</h1>

		<p>
        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		</p>
        
        <p>
Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.
		</p>     
        
        <form class="contact-form">
        	<h2>KONTAKTIRAJTE NAS</h2>
            <fieldset class="two-columns clearfix">
            	<ul class="column">
                	<li>
                    	<label>Ime i prezime:<span>*</span></label>
                        <input type="text" />
                    </li>
                	<li>
                    	<label>Naziv firme:<span>*</span></label>
                        <input type="text" />
                    </li>
                	<li>
                    	<label>Telefon:<span>*</span></label>
                        <input type="text" />
                    </li>
                	<li>
                    	<label>Email:<span>*</span></label>
                        <input type="text" />
                    </li>
                </ul>
            	<ul class="column">
                	<li>
                    	<label>Poruka:</label>
                        <textarea></textarea>
                    </li>
                </ul>
            </fieldset>
            <p>* Obavezna polja</p>
            <button>POŠALJI</button>
        </form>
        
        <div class="two-columns clearfix payment-delivery equal-columns">
        	<div class="column">
            	<h3>PLAĆANJE</h3>
                <p>
                	Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera 
                    gothica, quam nunc mus parum claram, anteposuerit litterarum formas manitatis per seacula quarta decima et quinta 
                </p>
            </div>
          	<div class="column">
				<h3>DOSTAVA</h3>
                <p>
                	Našim partnerima, pored proizvoda pomenutih proizvođača, nudimo i besplatnu dostavu robe na celoj teritoriji Republike 
                    Srbije. U mogućnosti smo da robu dostavimo u roku od 24h od prijema porudžbine.
                </p>
            </div>
        </div>
	</div><!-- / Wrapper -->
	
	
<?php include('footer.php'); ?>