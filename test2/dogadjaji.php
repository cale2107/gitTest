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
				<li class="home"><a href="index.php">POČETNA</a></li>
				<li class="about"><a href="o-nama.php">O NAMA</a></li>
				<li class="brands"><a href="brendovi.php">BRENDOVI</a></li>
				<li class="events active"><a href="dogadjaji.php">DOGAĐAJI</a></li>
                <li class="faq"><a href="pet_zona_plus.php">PET ZONA PLUS</a></li>
				<!--<li class="faq"><a href="pitanja.php">PITANJA</a></li>-->
				<!--<li class="cooperation"><a href="saradnja-sa-uvmps.php">SARADNJA SA UVMPS</a></li>-->
				<li class="contact"><a href="kontakt.php">KONTAKT</a></li>
			</ul>
		</nav>
	</header>

    <div class="breadcrumbs tight">
    	<ul class="clearfix">
        	<li><a href="#">Početna</a></li>
        	<li><span>Događaji</span></li>
        </ul>
    </div><!-- / Breadcrumbs -->
    
	<div class="wrapper news">

		<h1 class="blue-title">PREDSTOJEĆI DOGAĐAJI</h1>
        
        <ul class="news-list">
        	<li>
                <a class="img-holder" href="#"><img src="pictures/new-offer-img-1.jpg" alt="" /></a>
                <div class="content-holder">
	                <h3><a href="#">PlusPLus prezentacija novih proizvoda</a></h3>
                    <h4>Nova 94 (Svetog Save), Beograd, Surčin  - 09.12.2013.</h4>
                    <p>
                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    </p>
                    <a href="#" class="more-btn">SAZNAJ VIŠE</a>
                </div>
            </li>
        </ul>

		<h2 class="gray-title">PROŠLI DOGAĐAJI</h1>

        <ul class="news-list">
        	<li>
                <a class="img-holder" href="#"><img src="pictures/new-offer-img-1.jpg" alt="" /></a>
                <div class="content-holder">
	                <h3><a href="#">UVMPS seminar</a></h3>
                    <h4>Nova 94 (Svetog Save), Beograd, Surčin  - 09.12.2013.</h4>
                    <p>
                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    </p>
                    <a href="#" class="more-btn">SAZNAJ VIŠE</a>
                </div>
            </li>
        	<li>
                <a class="img-holder" href="#"><img src="pictures/new-offer-img-2.jpg" alt="" /></a>
                <div class="content-holder">
	                <h3><a href="#">52. Međunarodna izložba pasa svih rasa - CACIB Beograd </a></h3>
                    <h4>Nova 94 (Svetog Save), Beograd, Surčin  - 09.12.2013.</h4>
                    <p>
                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    </p>
                    <a href="#" class="more-btn">SAZNAJ VIŠE</a>
                </div>
            </li>
        	<li>
                <a class="img-holder" href="#"><img src="pictures/new-offer-img-3.jpg" alt="" /></a>
                <div class="content-holder">
	                <h3><a href="#">Proizvoljni naslov događaja</a></h3>
                    <h4>Ruzveltova 19, Beograd - 24.01.2013.</h4>
                    <p>
                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    </p>
                    <a href="#" class="more-btn">SAZNAJ VIŠE</a>
                </div>
            </li>
        	<li>
                <a class="img-holder" href="#"><img src="pictures/new-offer-img-4.jpg" alt="" /></a>
                <div class="content-holder">
	                <h3><a href="#">Simpozijum veterinara male prakse Srbije 2012</a></h3>
                    <h4>Dečji kulturni centar Beograda - 10-13.10.2012.</h4>
                    <p>
                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    </p>
                    <a href="#" class="more-btn">SAZNAJ VIŠE</a>
                </div>
            </li>
        </ul>
        
        <div class="pagination">
        	<ul>
            	<li><a href="#" class="prev"><</a></li>
            	<li class="active"><span>1</span></li>
            	<li><a href="#">2</a></li>
            	<li><a href="#">3</a></li>
            	<li><span>...</span></li>
            	<li><a href="#">7</a></li>
            	<li><a href="#" class="next">></a></li>
            </ul>
            <p>Strana 1 od 7</p>
        </div>
 
	</div><!-- / Wrapper -->
	
	
<?php include('footer.php'); ?>