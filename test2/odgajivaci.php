<?php
    $page = 'home';
    include('header.php');
?>

	<header>
		<div class="top pink-top">
			<div class="clearfix wrapper">
            	<ul class="category-nav left">
                	<li class="pink">
                    	<a href="#">Odgajivači</a>
                        <ul>
                        	<li class="green"><a href="#">Prodavci</a></li>
                            <li class="orange"><a href="#">Vlasnici</a></li>
                        </ul>
                    </li>
                </ul>
				<ul class="left top-nav">
					<li><a href="#">AKCIJE</li>
					<li><a href="#">NAŠI ŠAMPIONI</a></li>
					<li><a href="#">SAVETI</a></li>
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

	<div class="inner-banner" style="background-image:url(pictures/breeders-banner.jpg)"></div><!-- / Inner page banner -->
	
    <div class="breadcrumbs">
    	<ul class="clearfix">
        	<li><a href="#">Početna</a></li>
            <li><span>Odgajivači</span></li>
        </ul>
    </div><!-- / Breadcrumbs -->
    
	<div class="wrapper breeders">
    
		<h1>POSTANITE DEO TIMA</h1>

		<p>
        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Ut enim ad minim veniam, quis nostrud exercitation ullamco.
		</p>
        
        <div class="blue-holder access">	
        	<h2>POPUNITE PRISTUPNICU</h2>
            <a href="#pristupnica" class="fancybox">PRISTUPNICA</a>
        </div>
        
		<ul class="locations equal-columns">
			<li>
                <p><strong>PlusPlus d.o.o</strong></p>
                <p>Nova 94 (Svetog Save)<br />
                11000 Beograd, Surčin</p>
                <p>Radno vreme: 9 - 17h<br />
				Subotom: 9 - 14h</p>
                <p><strong>Neko Nekić</strong> - komercijalni direktor<br />
				e-mail: <a href="mailto:office@plusplus.co.rs">neko@plusplus.co.rs</a></p>
                <p>(0) 11 313 9800<br />
                (0) 11 314 8671<br />
                (0) 11 314 8678</p>
                <p>PIB: 123456789<br />
                Matični broj: 33344455</p>
            </li>
            <li>
                <p><strong>Animalis - Aranđelovac</strong></p>
                <p>Ime Ulice bb<br />
				34300 Aranđelovac</p>
                <p>Radno vreme: 9 - 17h<br />
				Subotom: 9 - 14h</p>
                <p><strong>Petar Petrović</strong> - direktor<br />
				e-mail: <a href="mailto:office@plusplus.co.rs">animalis@open.telekom.rs</a></p>
                <p>(0)63 17 00 799<br />
				(0)63 805 30 68</p>
                <p>PIB: 123456789<br />
                Matični broj: 33344455</p>
            </li>
            <li>
                <p><strong>Oskar- Ćuprija</strong></p>
                <p>Anđe Ranković 2<br />
				35230 Ćuprija</p>
                <p>Radno vreme: 9 - 17h<br />
				Subotom: 9 - 14h</p>
                <p><strong>Mara Marić</strong> - komercijalista<br />
                e-mail: <a href="mailto:office@plusplus.co.rs">mara.nis@plusplus.co.rs</a></p>
                <p>(0)64 189 0030</p>
                <p>PIB: 123456789<br />
                Matični broj: 33344455</p>
            </li>
        </ul>

		<div class="hide">
			<div id="pristupnica" class="popup-content">
				<h3>Team Breeder Club - PRISTUPNICA</h3>
                <form class="access-form">
					<fieldset>
                    	<ul>
                        	<li>
                            	<label>Ime odgajivačnice:</label>
                                <input type="text" />
                            </li>
                        	<li>
                            	<label>Vlasnik:</label>
                                <input type="text" />
                            </li>
                        	<li>
                            	<label>Adresa:</label>
                                <input type="text" />
                            </li>
                        	<li>
                            	<label>Telefon:</label>
                                <input type="text" />
                            </li>
                        	<li>
                            	<label>Website:</label>
                                <input type="text" />
                            </li>
                        	<li>
                            	<label>Email:</label>
                                <input type="text" />
                            </li>
                        </ul>
                    </fieldset>
					<fieldset>
                    	<ul>
                        	<li>
                            	<label>Odrasli psi:</label>
                                <input type="text" />
                            </li>
                        	<li>
                            	<label>Priplodne kuje:</label>
                                <input type="text" />
                            </li>
                        	<li>
                            	<label>Broj štenadi (jednogodišnji interval):</label>
                                <input type="text" class="small" />
                            </li>
                        	<li>
                            	<label>Koju ste hranu za pse koristili ranije:</label>
                                <input type="text" class="small" />
                            </li>
                        	<li>
                            	<label>Koju ste hranu za štence koristili ranije:</label>
                                <input type="text" class="small" />
                            </li>
                        	<li>
                            	<label>Da li koristite dodatke ishrani:</label>
                                <input type="text" class="small" />
                            </li>
                        </ul>
                    </fieldset>
                    <button>POŠALJI</button>
                </form>
			</div>
		</div><!-- / Pristupnica popup -->

	</div><!-- / Wrapper -->
	
	
<?php include('footer.php'); ?>