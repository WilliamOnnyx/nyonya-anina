<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo $nama;?>
    </title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/bootstrap.css">
    
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/main.css">
    
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/responsive.css">
    
    <!--Icon Fonts-->
    <link rel="stylesheet" media="screen" href="<?=base_url()?>assets/assets/fonts/font-awesome/font-awesome.min.css"/>
    <link rel="stylesheet" media="screen" href="<?=base_url()?>assets/assets/css/matter-icon.css" />
    

    <!-- Extras -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/extras/lightbox.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/extras/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/extras/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/extras/text-rotator.css">
      
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
      </script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
      </script>
      <![endif]-->
    <link rel="icon" type="image/ico" href="<?=base_url()?>assets/images/logo/<?php echo $logo;?>"/>
  </head>
          
    <body id="matter-top" data-spy="scroll" data-offset="20" data-target="#navbar">
      
    <header class="logo-menu" id="home">
      <!-- Nav Menu Section -->
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">
                Toggle navigation
              </span>
              <span class="icon-bar">
              </span>
              <span class="icon-bar">
              </span>
              <span class="icon-bar">
              </span>
            </button>
            <a class="navbar-brand" href="index.html">
              <img style="width:140px; height:70px;" src="<?=base_url()?>assets/images/logo/<?php echo $logo;?>" alt="">
            </a>
          </div>
          
          <div class="collapse navbar-collapse" id="navbar">
            <div class="visible-lg">
              <span class="to-top pull-right">
                <a href="#matter-top">
                  <i class="fa fa-angle-up fa-2x">
                  </i>
                </a>
              </span>
              <span class="to-bottom pull-right">
                <a href="#about">
                  <i class="fa fa-angle-down fa-2x floating">
                  </i>
                </a>
              </span>
            </div>
            <ul class="nav navbar-nav animated-nav navbar-right matter-main-nav" id="nav">
              <li class="active">
                <a href="#home">
                  Home
                </a>
              </li>
              <li>
                <a href="#portfolio">
                  Menus
                </a>
              </li>
              <li>
                <a href="#services">
                  Commitments
                </a>
              </li>
			  <li>
                <a href="#about">
                  About
                </a>
              </li>
            </ul>  

          </div>
        </div>
      </nav>
      <!-- Nav Menu Section End -->
    </header>
    <section id="slider">
      <!-- Main Slider Section -->
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide" data-interval="5000">
          <div class="carousel-inner">

            <div class="item active" style="background-image: url(<?=base_url()?>assets/assets/img/slider/slide3.jpg);">

              <div class="carousel-caption">
                <h1 class="animated-late fadeInDown">
                  Welcome to Nyonya Anina Website
                </h1>
                <h2 class="animated-late fadeInUpQuick delay-1">
                  The Best Sundanese Retaurant Ever !
                </h2>
              </div>
            </div>
			
			<?php foreach ($promo as $promo){
            echo '<div class="item" style="background-image: url('.base_url().'assets/images/promo/'.$promo['foto'].');">';
            echo '  <div class="carousel-caption">';
            echo '    <h1 class="animated-late fadeInDown">';
            echo       $promo['title'];
            echo '    </h1>';
            echo '    <h2 class="animated-late fadeInUpQuick delay-1">';
            echo 		$promo['isi'];
            echo '    </h2>';
            echo '  </div>';
            echo '</div>';
            }?>
            
                       

          </div>
          <a class="left carousel-control 
          fadeInLeft" href="#carousel" data-slide="prev">
            <img src="<?=base_url()?>assets/assets/img/slider/btn-prev.png" alt="previuos button">
          </a>
          <a class="right carousel-control 
          fadeInRight" href="#carousel" data-slide="next">
            <img src="<?=base_url()?>assets/assets/img/slider/btn-next.png" alt="next button">
          </a>
        </div>
      </div>
    </section>
    <!-- Main Slider Section End-->
	
	
    <!-- Portfolio Section -->
    <section id="portfolio">
      <div class="container">
        <div class="row">
          <h1 class="section-title">
            Our Menu
          </h1>
          
          
          <!-- matter-portfolio-filter -->
          <ul class="matter-filter text-center">
            <li class="filter active" data-filter="all">
              All
            </li>
			<?php foreach ($kategori as $kate){
				$nama = str_replace(' ','',$kate['nama']);
				echo '<li class="filter" data-filter=".'.$nama.'">';
				echo $kate['nama'];
				echo '</li>';
				}
			?>
          </ul>
          
          <div class="matter_portfolio wow fadeInUpQuick">
			<?php foreach ($menu as $menu){
			$nama = str_replace(' ','',$menu['namaKategori']);
            echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix '.$nama.'">';
              echo '<div class="portfolio-item">';
                echo '<a href="#">';
                  echo '<img src="'.base_url().'assets/images/menu/'.$menu['foto'].'" alt="">';
                echo '</a>';
                echo '<div class="overlay">';
                  echo '<div class="icons">';
					echo '<div class="container">';
                    echo '<h3><b>'.$menu['nama'].'</b><h3>';
					echo '<p class="col-lg-3 col-md-3 col-sm-5 col-xs-11" style="font-size:12px;">'.$menu['deskripsi'].'</p>';
					echo '<br/>';
					echo '<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-size:20px;">Rp. '.$menu['harga'].'</p>';
					echo '<a data-lightbox="image1" href="'.base_url().'assets/images/menu/'.$menu['foto'].'" class="preview">';
                      echo '<i class="fa fa-eye"></i>';
                    echo '</a>';
					echo '</div>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
			}
			?>
            
          </div>          
        </div>
      </div>
    </section>
    <!-- Portfolio Section End -->
          
    <!-- Service Section -->
    
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="services-intro col-md-12 text-center wow fadeIn" data-wow-offset="10">
            <h1>
              <span>
                Our Commitments
              </span>
            </h1>
			<h2>
				commitment of that we keep that will make our customer comfortable and choose our food
			</h2>
          </div>
          <div class="col-md-3 text-center wow fadeInUp" data-wow-offset="10">
            <div class="service">
              <i class="fa fa-bolt fa-5x">
              </i>
              <div class="service-text">
                <h2>
                  15 Minutes per Food Ready 
                </h2>
                <p>
                  if more than that will get a discount according minute delay (for eating at a place)
                </p>
              </div>
            </div>
          </div>         
          
          <div class="col-md-3 text-center wow fadeInUp" data-wow-offset="10" data-wow-delay="0.2s">
            <div class="service">
              <i class="fa fa-car fa-5x">
              </i>
              <div class="service-text">
                <h2>
                  Free Shipping to All Over The Surabaya*
                </h2>
                <p>
                  Anywhere you we can bring a food for you *(terms and Conditions apply)
                </p>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 text-center wow fadeInUp" data-wow-offset="10" data-wow-delay="0.4s">
            <div class="service">
              <i class="fa fa-thumbs-up fa-5x">
              </i>
              <div class="service-text">
                <h2>
                  Delicious Taste
                </h2>
                <p>
                  The price offered in according with the taste and atmosphere will be provided
                </p>
              </div>
            </div>
          </div>          
          
          <div class="col-md-3 text-center wow fadeInUp" data-wow-offset="10" data-wow-delay="0.6s">
            <div class="service">
              <i class="fa fa-calendar fa-5x">
              </i>
              <div class="service-text">
                <h2>
                  Any Events for You
                </h2>
                <p>
                  Every month we well add a new event and it will be interesting to follow
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Service Section End -->
	
	
	
	    <!-- About Section -->
    
    <section id="about">
      <div class="about-inner">
        <div class="container">
          <div class="row">
            <h1 class="section-title">
              About us
            </h1>
            <div class="col-md-5">
              <div class="wow fadeInUpQuick">
                <div id="about-slider" class="owl-carousel">
                  <!-- Wrapper for slides -->
					<?php foreach ($foto as $item){
						echo '<div style="width:100%" class="item">';
						echo '<img src="'.base_url().'assets/images/gallery/'.$item['foto'].'" alt="...">';
						echo '</div>';				
					}	
					?>
                </div>
              </div>
            </div>
            
            <div class="col-md-7 wow fadeInRightQuick" data-wow-delay="0.5s">
              <p>
               <?php echo $about?>
              </p>
              <a href="#home" class="btn btn-lg btn-border">
                <i class="fa fa-info"></i>
                Today's Promo
              </a>
              <a href="#services" class="btn btn-lg btn-common-white">
                <i class="fa fa-question"></i>
                Why choose us?
              </a>
			  <div class="row container">          
			<div class="col-md-3">
			<div class="col-md-12 wow fadeInUpQuick">
            <a class="social" href="http://www.facebook.com/poenyanyonyaaninapage">
              <i class="fa fa-facebook fa-2x">
              </i>
            </a>
            <a class="social" href="https://twitter.com/search?q=poenyaanina&src=typd">
              <i class="fa fa-twitter fa-2x">
              </i>
            </a>
            <a class="social" href="https://instagram.com/poenya_nyonya_anina/">
              <i class="fa fa-instagram fa-2x">
              </i>
            </a>
          </div>
          
          <div class="col-md-12 contact-info wow fadeInUpQuick " data-wow-delay=".2s">
            <p>
              <i class="fa fa-map-marker">
              </i>
              <?php echo $alamat;?>
            </p>
            <p>
              <i class="fa fa-phone">
              </i>
              <?php echo $telepon;?>
            </p>
          </div>
		  </div>
		  <div class="col-md-6">
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.34969237204626!2d112.65581838536163!3d-7.286826289501681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xf78ad55b2e55252d!2sBuble+Wash!5e0!3m2!1sid!2sid!4v1433307852568" style="border:0" frameborder="0" height="180" width="300"></iframe>
          </div>
        </div>
			  
            </div>
                       
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->
     
    <!-- Footer Section -->
    <footer id="matter-footer">
      <!-- Copyright Section-->
      <div class="copyright" style="padding-top:10px;">
        <div class="container">
          <p>
            © Poenya Nyonya Anina 2015 All right reserved. Designed by 
            <a href="http://john.petra.ac.id/~m26412042">
              Onnyx Corp.
            </a>
          </p>          
        </div>
      </div>
      <!-- Copyright Section End-->
    </footer>
    <!-- footer Section End --> 

    <!-- jQuery Load -->
    <script src="<?=base_url()?>assets/assets/js/jquery-min.js"></script>
        
    <!-- Bootstrap JS -->
    <script src="<?=base_url()?>assets/assets/js/bootstrap.min.js"></script>
    <!--Text Rotator-->
    <script src="<?=base_url()?>assets/assets/js/text-rotator.js"></script>

    <!--jQuery Nav-->
    <script src="<?=base_url()?>assets/assets/js/jquery.nav.js"></script>

    <!--WOW Scroll Spy-->
    <script src="<?=base_url()?>assets/assets/js/wow.js"></script>
    <!--Smooth on Scroller-->
    <script src="<?=base_url()?>assets/assets/js/smooth-on-scroll.js"></script>
    <!--Smooth Scroller-->
    <script src="<?=base_url()?>assets/assets/js/smooth-scroll.js"></script>
    <!-- Light Box -->
    <script src="<?=base_url()?>assets/assets/js/lightbox.min.js"></script>
    <!-- Mixitup  -->
    <script src="<?=base_url()?>assets/assets/js/jquery.mixitup.min.js"></script>
    <!-- Owl carousel  -->
    <script src="<?=base_url()?>assets/assets/js/owl.carousel.js"></script>
    <!-- preset js -->
    <script src="<?=base_url()?>assets/assets/js/style.changer.js"></script>
    <!-- Counterup -->
    <script src="<?=base_url()?>assets/assets/js/jquery.counterup.min.js"></script>
    <!-- waypoints -->
    <script src="<?=base_url()?>assets/assets/js/waypoints.min.js"></script>    
    <!-- All JS plugin Triggers -->
    <script src="<?=base_url()?>assets/assets/js/main.js"></script>
    
    </body>
</html>