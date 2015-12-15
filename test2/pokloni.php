<?php
    $page = 'home';
    include('header.php');
?>

	<header>
		<div class="top orange-top">
			<div class="clearfix wrapper">
            	<ul class="category-nav left">
                	<li class="orange">
                    	<a href="#">Vlasnici</a>
                        <ul>           
                        	<li class="green"><a href="#">Prodavci</a></li>
                        	<li class="pink"><a href="#">Odgajivači</a></li>
                        </ul>
                    </li>
                </ul>
				<ul class="left top-nav">
					<li><a href="#">SAVETI</li>
					<li><a href="#">POKLONI</a></li>
					<li><a href="#">IMENA ZA LJUBIMCE</a></li>
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

	<div class="inner-banner" style="background-image:url(pictures/owners-banner.jpg)"></div><!-- / Inner page banner -->
	
    <div class="breadcrumbs">
    	<ul class="clearfix">
        	<li><a href="#">Početna</a></li>
            <li><a href="#">Vlasnici</a></li>
            <li><span>Pokloni</span></li>
        </ul>
    </div><!-- / Breadcrumbs -->
    
	<div class="wrapper gifts">
		<h1>PLUSPLUS POKLANJA</h1>
        
		<p>
        	Imate tri i više pasa ili mačaka? Prijavite se za poklon. Pošaljite nam sliku svojih ljubimaca.
		</p>
        
        <form class="access-form">
        	<ul>
            	<li>
                	<label>Ime i prezime: </label>
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
                	<label>Email:</label>
                    <input type="text" />
                </li>
            	<li>
                	<label>Broj evidencije čipovanih životinja:</label>
                    <input type="text" class="small" />
                </li>
            	<li>
                	<label>Odaberite Fotografiju:</label>
                    <div>
                        <span>Browse</span>
                    	<div class="show-value"></div>
                        <input type="file" />
                    </div>
                </li>
            </ul>
            <button>POŠALJI</button>
            <p>Sva polja su obavezna</p>
        </form>

		<div class="gallery">
            <h2 class="blue-title">FOTO-GALERIJA NAŠIH ŠAMPIONA</h2>
            <ul>
                <li>
                    <a href="pictures/thumb-2-large.jpg" title="CACIB Požarevac 28.09.2013." rel="gallery" class="fancybox">
                    	<img src="pictures/gallery-img-1.jpg" />
                        <div>
                        	<h3>CACIB Požarevac 28.09.2013.</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="pictures/thumb-2-large.jpg" title="CACIB Požarevac 28.09.2013." rel="gallery" class="fancybox">
                    	<img src="pictures/gallery-img-2.jpg" />
                        <div>
                        	<h3>CACIB Požarevac 28.09.2013.</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="pictures/thumb-2-large.jpg" title="CACIB Požarevac 28.09.2013." rel="gallery" class="fancybox">
                    	<img src="pictures/gallery-img-3.jpg" />
                        <div>
                        	<h3>CACIB Požarevac 28.09.2013.</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="pictures/thumb-2-large.jpg" title="CACIB Požarevac 28.09.2013." rel="gallery" class="fancybox">
                    	<img src="pictures/gallery-img-4.jpg" />
                        <div>
                        	<h3>CACIB Požarevac 28.09.2013.</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="pictures/thumb-2-large.jpg" title="CACIB Požarevac 28.09.2013." rel="gallery" class="fancybox">
                    	<img src="pictures/gallery-img-5.jpg" />
                        <div>
                        	<h3>CACIB Požarevac 28.09.2013.</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="pictures/thumb-2-large.jpg" title="CACIB Požarevac 28.09.2013." rel="gallery" class="fancybox">
                    	<img src="pictures/gallery-img-6.jpg" />
                        <div>
                        	<h3>CACIB Požarevac 28.09.2013.</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="pictures/thumb-2-large.jpg" title="CACIB Požarevac 28.09.2013." rel="gallery" class="fancybox">
                    	<img src="pictures/gallery-img-7.jpg" />
                        <div>
                        	<h3>CACIB Požarevac 28.09.2013.</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="pictures/thumb-2-large.jpg" title="CACIB Požarevac 28.09.2013." rel="gallery" class="fancybox">
                    	<img src="pictures/gallery-img-1.jpg" />
                        <div>
                        	<h3>CACIB Požarevac 28.09.2013.</h3>
                        </div>
                    </a>
                </li>
            </ul>            
        </div>
   
	</div><!-- / Wrapper -->
	
	
<?php include('footer.php'); ?>