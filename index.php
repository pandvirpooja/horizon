
<?php
$source = !empty($_GET['utm_source']) ? $_GET['utm_source'] : 'Corporate website';
$capaignname = !empty($_GET['utm_campaign_name']) ? $_GET['utm_campaign_name'] : 'Search';
$capaignid = !empty($_GET['utm_campaign_id']) ? $_GET['utm_campaign_id'] : 'Website';
$capaigncity = !empty($_GET['utm_campaign_city']) ? $_GET['utm_campaign_city'] : 'Pune';


$URLinfo = "<input type='hidden' id='utm_source' name='utm_source' value='$source' />"
        . "<input type='hidden' id='utm_campaign_name' name='utm_campaign_name' value='$capaignname' />"
        . "<input type='hidden' id='utm_campaign_id' name='utm_campaign_id' value='$capaignid'/>"
        . "<input type='hidden' id='utm_campaign_city' name='utm_campaign_city' value='$capaigncity'/> ";
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Horizons!!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="facebook-domain-verification" content="o3l7i7qf3ddhk2erwu67b03rieq0q7" />

  <!-- Favicons -->
   <!-- <link href="assets/img/logo.png" rel="icon">
   <link href="assets/img/logo.png" rel="apple-touch-icon"> -->
                                           

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

  <!-- Vendor CSS Files -->
  <!-- Font Awesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: Selecao - v2.3.1
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

    
      <div class=" mr-auto mt-3">
        <!-- <h1 class="text-light"><a href="index.html">Selecao</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.php"><img src="assets/img/h1.png" alt="logo-image" class="img-fluid" ></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#specifications">Specifications</a></li>
          <li><a href="#gallery">Gallery</a></li>
         <!--  <li><a href="#pricing">Pricing</a></li> -->
          <li><a href="#amenities">Amenities</a></li>
          <li><a href="#floor-plans">Floor Plans</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <!--<h2 class="animate__animated animate__fadeInDown">Welcome to <span>24 SUNSHINE Towers</span></h2>-->
          <h2 class="animate__animated animate__fadeInDown">Horizons Towers Awaiting to<br> welcome you!</h2>
          <p class="animate__animated fanimate__adeInUp">Own the Home Meant for you</p>
          <!-- <a href="#popModel" class="btn-get-started animate__animated animate__fadeInUp scrollto">Enquire Now</a> -->
          <button class="btn-get-started animate__animated animate__fadeInUp scrollto" data-toggle="modal" data-target="#popModel">Enquire Now</button>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Balance, that's the Secret<br> </h2> 
          <p class="animate__animated animate__fadeInUp">2 & 3 BHK Spacious Homes</p> 
          <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Enquire Now</a>  -->
         <button class="btn-get-started animate__animated animate__fadeInUp scrollto" data-toggle="modal" data-target="#popModel">Enquire Now</button>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Open up to the good things in life</h2>
          <!-- <p class="animate__animated animate__fadeInUp">2 & 3 BHK's in CHIKHALI Pradhikaran with Voice Controlled Homes</p> -->
          <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Enquire Now</a> -->
          <button class="btn-get-started animate__animated animate__fadeInUp scrollto" data-toggle="modal" data-target="#popModel">Enquire Now</button>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <!--<h2>About</h2>-->
          <p style="font-size: 36px;font-weight: 700;text-transform: uppercase;color: #2a2c39;">PINNACLE PROPERTIES </p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <!-- <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <!-- <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul> -->
            <div class=" order-1 order-lg-2 text-center">
                <img src="assets/img/img-1.jpeg" alt="project-overview-image" class="img-responsive" width="100%" height="auto">
              </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Pinnacle Properties is a premier real estate company in Pune with its main focus on providing projects with the highest standards of quality. The company aims to consistently make great strides in fulfilling the dreams of a large number of esteemed customers. It is armed with a team of talented professionals who are very knowledgeable and proficient in the real estate sector and are always ready to deliver more than what has been asked for.Pinnacle Properties is known for their strategic selection of location and turning your investment into a valuable asset.

            </p>
            <!-- <a href="#" class="btn-learn-more">Know More</a> -->
            <button class="btn-learn-more" data-toggle="modal" data-target="#popModel">Know More</button>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">
               <!--<i class="fa fa-building"></i>-->
               <!--<i class="icofont-building-alt"></i>-->
              <h4 class="d-md-block">2 BHK</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <!-- <i class="ri-body-scan-line"></i> -->
              <h4 class="d-lg-block">3 BHK</h4>
            </a>
          </li>
          <!-- <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
            </a>
          </li> -->
          <!-- <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <a class="nav-link" data-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
            </a>
          </li> -->
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Spacious and Perfectly Balanced 2BHK </h3>
                <p>
                A home designed for an extraordinary lifestyle with its best architecture & planning offers you the best of both worlds.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i>Spacious & Comfortable Lifestyle</li>
                  <li><i class="ri-check-double-line"></i>Thoughtfully designed architecture with Premium Amenities</li>
                </ul>
                <!-- <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p> -->
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/floor-plans/2bhk1.png" alt="2BHK-image" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Splendid and elegant 3 BHK homes </h3>
                <p>
                Explore the true definition of a spacious and luxurious lifestyle in the modern era of living.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i>A lifestyle worthy of you</li>
                  <li><i class="ri-check-double-line"></i>Zero wastage apartments with spacious interiors</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/floor-plans/3bhk-new.png" alt="3BHK-image" class="img-fluid">
              </div>
            </div>
          </div>
          <!--<div class="tab-pane" id="tab-3">-->
          <!--  <div class="row">-->
          <!--    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">-->
          <!--      <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>-->
          <!--      <p>-->
          <!--        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate-->
          <!--        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in-->
          <!--        culpa qui officia deserunt mollit anim id est laborum-->
          <!--      </p>-->
          <!--      <ul>-->
          <!--        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>-->
          <!--        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>-->
          <!--        <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>-->
          <!--      </ul>-->
          <!--      <p class="font-italic">-->
          <!--        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore-->
          <!--        magna aliqua.-->
          <!--      </p>-->
          <!--    </div>-->
          <!--    <div class="col-lg-6 order-1 order-lg-2 text-center">-->
          <!--      <img src="assets/img/features-3.png" alt="" class="img-fluid">-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <!--<div class="tab-pane" id="tab-4">-->
          <!--  <div class="row">-->
          <!--    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">-->
          <!--      <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>-->
          <!--      <p>-->
          <!--        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate-->
          <!--        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in-->
          <!--        culpa qui officia deserunt mollit anim id est laborum-->
          <!--      </p>-->
          <!--      <p class="font-italic">-->
          <!--        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore-->
          <!--        magna aliqua.-->
          <!--      </p>-->
          <!--      <ul>-->
          <!--        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>-->
          <!--        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>-->
          <!--        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>-->
          <!--      </ul>-->
          <!--    </div>-->
          <!--    <div class="col-lg-6 order-1 order-lg-2 text-center">-->
          <!--      <img src="assets/img/features-4.png" alt="" class="img-fluid">-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>

      </div>
    </section><!-- End Features Section -->
    <section id="floor-plans" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <!--<h2>floor plans</h2>-->
          <p style="font-size: 36px;font-weight: 700;text-transform: uppercase;color: #2a2c39;">floor plans</p>
        </div> 

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box featured" data-aos="zoom-in">
              <!-- <h3>Ground Floor</h3> -->
             <!--  <h4><sup>$</sup>0<span> / month</span></h4> -->
              <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul> -->
              <img src="assets/img/floor-plans/Commercial-Ground1.jpg" class="img-fluid img_blur" alt="plan1">
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#popModel">Enquire Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <!-- <h3>Upper Floor</h3> -->
              <!-- <h4><sup>$</sup>19<span> / month</span></h4> -->
             <!--  <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul> -->
               <img src="assets/img/floor-plans/Commercial-Upper.jpg" class="img-fluid img_blur" alt="plan2">
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#popModel">Enquire Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="200" >
              <!-- <h3>3 BHK-Type 'B'</h3> -->
              <!-- <h4><sup>$</sup>29<span> / month</span></h4> -->
              <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul> -->
               <img src="assets/img/floor-plans/Floorplan.jpg" class="img-fluid img_blur" alt="plan3">
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#popModel">Enquire Now</a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="300"> -->
             <!--  <span class="advanced">Advanced</span> -->
              <!-- <h3>3 BHK-Type 'A'</h3> -->
              <!-- <h4><sup>$</sup>49<span> / month</span></h4> -->
              <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul> -->
               <!-- <img src="assets/img/floor-plans/floor-6.jpg" class="img-fluid img_blur" alt="plan4">
              <div class="btn-wrap">
                <a href="#" class="btn-buy" data-toggle="modal" data-target="#popModel">Enquire Now</a>
              </div> -->
            </div>
          </div>

</div>
      </div>
    </section>


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-md-12 text-center text-lg-left">
            <h1 class="text-white">SPACE ... BREEZE ... COMFORT !</h1>
              <h4 class="text-white">Open up to the good things in life</h4>
            <p>One aspires to live the way he dreams and at Pinnacle Properties, we strive to make offerings, close to your dreams coming to reality. At our new creation ‘HORIZONS’, we have specifically designed apartments that will please your eyes and spacious apartments that will take care of your comfort.</p>
            <p>HORIZONS is a thoughtfully designed project for families, for whom every aspect of life is worth living to the fullest and offers exclusive lifestyle enhancing benefits and exceptional connectivity making it a sensible investment for today and having great future value.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <!-- <a class="cta-btn align-middle" href="#">Enquire Now</a> -->
            <button class="cta-btn align-middle" data-toggle="modal" data-target="#popModel">Enquire Now</button>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
    

        <!-- ======= Testimonials Section ======= -->
    <section id="amenities" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <!--<h2>Amenities</h2>-->
          <p style="font-size: 36px;font-weight: 700;text-transform: uppercase;color: #2a2c39;">Amenities</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

          <div class="testimonial-item">
            <img src="assets/img/icons/rainwater.png" class="testimonial-img" alt="item1">
            <h3>Rain Water Harvesting </h3>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/icons/charging.png" class="testimonial-img" alt="item2">
            <h3>Charging Staion for EV</h3>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/icons/children-play-area.png" class="testimonial-img" alt="item3">
            <h3>Children Play Area</h3>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/icons/garden.png" class="testimonial-img" alt="item4">
            <h3>Rooftop Landscaped</h3>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/icons/solar-energy.png" class="testimonial-img" alt="item5">
            <h3>Solar Water Heating system</h3>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/icons/landscape-garden.png" class="testimonial-img" alt="item6">
            <h3>Landscape Garden</h3>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/icons/android.png" class="testimonial-img" alt="item7">
            <h3>Innovation Garbage Disposal system</h3>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/icons/generator.png" class="testimonial-img" alt="item8">
            <h3>Automatic Life with Generator Backup</h3>
          </div>

          <!-- <div class="testimonial-item">
            <img src="assets/img/icons/skate-track.png" class="testimonial-img" alt="item9">
            <h3>Skate Track</h3>
          </div> -->

          <div class="testimonial-item">
            <img src="assets/img/icons/cctv.png" class="testimonial-img" alt="item10">
            <h3>CCTV Survelliance for Extra security</h3>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/icons/guards.png" class="testimonial-img" alt="item11">
            <h3>Elegant Entrance Gate with Security cabin</h3>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/icons/extinguisher.png" class="testimonial-img" alt="item12">
            <h3>Fire fighting system</h3>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/icons/road.png" class="testimonial-img" alt="item13">
            <h3>Concrete paved internal roads</h3>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->
    
    <!-- ======= Services Section ======= -->
    <section id="specifications" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <!--<h2>Specifications</h2>-->
          <p style="font-size: 36px;font-weight: 700;text-transform: uppercase;color: #2a2c39;">Specifications</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <h4 class="title"><a href="">R.C.C</a></h4>
              <ul>
                <li>Earthquake Resistant RCC Structure</li>
                <!-- <li>Aesthetically Designed Elevation</li> -->
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <h4 class="title"><a href="">Brickwork And Plaster</a></h4>
              <ul>
                <li>Low heat transmission brickwork. Smooth gypsvm for internal walls for good finish Double coat weather proof plaster for external walls </li>
                <!-- <li>2X2' Vitrified Tile</li>
                <li>Washroom, Toilet & Terrace</li>
                <li>Branded Antiskid Floor Tiles</li> -->
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <h4 class="title"><a href="">Paints</a></h4>
              <ul>
                <li>Weather proof good quality exterior paints OBD paint on internal walls.</li>
                <!-- <li>Gypsum Finish Walls Internally</li>
                <li>Sand Faced Plaster Externally</li> -->
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <h4 class="title"><a href="">Doors and Windows</a></h4>
              <ul>
                <li>Designer Laminated factory finished doors with good quality wooden/granite door frame. 3 track aluminium sliding windows with mosquito net in all bedrooms.</li>
                <li> 2 track sliding window with exhaust in the kitchen.</li>
                <li> Safety grills for windows except bathrooms. Granite frames for all windows.</li>
                <!-- <li>Provision for water purifier</li> -->
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <h4 class="title"><a href="">Security</a></h4>
              <ul>
                <li>Security cabin with intercom facility.Video door phone with intercom facility.</li>
                <!-- <li>Brass Finish Branded Fixtures</li>
                <li>Laminated Flush Doo</li> -->
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <h4 class="title"><a href="">Plumbing</a></h4>
              <ul>
                <li>Well planned plumbing for better water usage. Provision of washing machine points in the
                    dry balcony</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <h4 class="title"><a href="">Electrical</a></h4>
              <ul>
                <li>Concealed fire resistant with copper wiring. LED lights in the common areas with DG back up. Ample fight points with Modular sMiches. Provision for invertor. TV and Telephone points in the living area and Master bedroom.</li>
                <!-- <li>M.S. Railing</li> -->
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <h4 class="title"><a href="">Both and WC</a></h4>
              <ul>
                <li>Solar water heater in both the bathrooms.Branded sanitary ware.</li>
                <!-- <li>Insect Mesh</li>
                <li>M.S. Safety Grill & Marble Sill</li> -->
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <h4 class="title"><a href="">Flooring</a></h4>
              <ul>
                <li>Designer ceramic tiles in terrace and utility area. Designer dado tiles in Kitchen and Bathroom. Good quality flooring tiles in the entire flat.</li>
                <!-- <li>Copper Wires</li>
                <li>Circuit Breaker</li>
                <li>Cable, TV & Telephone Point in Living & Bedroom</li> -->
              </ul>
            </div>
          </div>
          <!-- <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <h4 class="title"><a href="">Plumbing & Sanitary</a></h4>
              <ul>
                <li>Separate Wet & Dry Area</li>
                <li>Concealed Piping</li>
                <li>Premium Quality Sanitary & Bath Fittings</li>
                <li>Provision for Geyser in One Washroom</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <h4 class="title"><a href="">Tiles</a></h4>
              <ul>
                <li>Designer Dado Tiles in The Washroom & Toilets</li>
              </ul>
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <h4 class="title"><a href="">Electrical</a></h4>
              <ul>
                <li>Internally Oil Bound Distemper</li>
                <li>Externally Weather Shield Acrylic Paint Entire Building</li>
              </ul>
            </div>
          </div>
        </div> -->

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="gallery" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <!--<h2>Gallery</h2>-->
          <p style="font-size: 36px;font-weight: 700;text-transform: uppercase;color: #2a2c39;">Gallery</p>
        </div>

        <!-- <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">View1</li>
          <li data-filter=".filter-card">View2</li>
          <li data-filter=".filter-web">View3</li>
        </ul> -->

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><a href="assets/img/portfolio/gallery1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="bedroom"><img src="assets/img/portfolio/gallery1.jpg" class="img-fluid" alt="gallery1"></a></div>
           <!-- <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/gallery1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="bedroom"><i class="bx bx-plus "></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div> -->
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"> <a href="assets/img/portfolio/gallery3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="hall"><img src="assets/img/portfolio/gallery3.jpg" class="img-fluid" alt="gallery2"></a></div>
            <!-- <div class="portfolio-info"> -->
              <!--<h4>Web 3</h4>-->
              <!--<p>Web</p>-->
              <!-- <a href="assets/img/portfolio/gallery3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="hall"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div> -->
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"> <a href="assets/img/portfolio/gallery4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="hall"><img src="assets/img/portfolio/gallery4.jpg" class="img-fluid" alt="gallery3"></a></div>
            <!-- <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/gallery4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="hall"></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div> -->
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"> <a href="assets/img/portfolio/gallery-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="kids room"><img src="assets/img/portfolio/gallery-5.jpg" class="img-fluid" alt="gallery4"></a></div>
            <!-- <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/gallery-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="kids room"></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div> -->
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"> <a href="assets/img/portfolio/gallery6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="bedroom"><img src="assets/img/portfolio/gallery6.jpg" class="img-fluid" alt="gallery5"></a></div>
            <!-- <div class="portfolio-info"> -->
              <!--<h4>Web 2</h4>-->
              <!--<p>Web</p>-->
               <!-- <a href="assets/img/portfolio/gallery6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="bedroom"></a>  -->
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            <!-- </div> -->
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"> <a href="assets/img/portfolio/gallery7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="bedroom"><img src="assets/img/portfolio/gallery7.jpg" class="img-fluid" alt="gallery6"></a></div>
            <!-- <div class="portfolio-info"> -->
              <!--<h4>App 3</h4>-->
              <!--<p>App</p>-->
               <!-- <a href="assets/img/portfolio/gallery7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="bedroom"></a>  -->
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
             <!-- </div> -->
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/gallery9.jpg" class="img-fluid" alt="gallery7"></div> -->
            <!-- <div class="portfolio-info">  -->
              <!--<h4>Card 1</h4>-->
              <!--<p>Card</p>-->
              <!-- <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            <!-- </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="gallery8"></div>
            <div class="portfolio-info"> --> 
              <!--<h4>Card 3</h4>-->
              <!--<p>Card</p>-->
              <!-- <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a> -->
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            <!-- </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="gallery9"></div>
            <div class="portfolio-info"> -->
              <!--<h4>Web 3</h4>-->
              <!--<p>Web</p>-->
              <!-- <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a> -->
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Pricing Section ======= -->
    
    <!-- ======= F.A.Q Section ======= -->
    <section class="block" id="location" style="margin-top:20px;">
                <div class="container">
                    <div class="block__wrapper">
                       
                        <!--end block-title-->
                        <div class="row">
                            <div class="pack d-inline-block col-md-12" data-scroll-reveal="enter bottom and move 10px">
                                <!-- <h4>Aquagem</h4> -->
                                <!-- <img src="assets/img/logo.png" width="100px" alt=""> -->
                                <div class="block__title text-center loc">
                                    <h2>Strategic Location Multiple Advantages</h2> 
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="icon-text">
                                            <img src="assets/img/icon/road-with-broken-line.png" alt="">
                                            <p><strong style="text-transform:uppercase;font-size:18px">SCHOOL</strong>  
                                            <li>SNBP School - 1 km</li>
                                            <li>City Pride School - 1.5km </li>
                                            <li>Priyadarshani School -1.5 km</li>
                                            <li>Innovative World School - 1.4 km</li>
                                            </p>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon-text">
                                            <img src="assets/img/icon/lake.png" alt="">
                                            <p><strong style=";text-transform:uppercase;font-size:18px">WORK</strong> 
                                            <li>MIDC Bhosari / Chwd - 2 - 3 km</li> 
                                          <li>Talawade IT Park - 5.5 km </li>
                                        <li>Chakan MIDC Area - 7 km</li></p>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon-text">
                                            <img src="assets/img/icon/cave.png" alt="">
                                            <p><strong style=";text-transform:uppercase;font-size:18px">HOSPITAL</strong> 
                                            <li>STAR Multispeciality - 1 km </li>  
                                            <li>Lifeline Hospital - 1.5km</li> 
                                            <li>Imperial Hospital - 4 km</li>
                                            <li>YCM Hospital- 8 km</li>
                                            
                                              </p>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon-text">
                                            <img src="assets/img/icon/temple.png" alt="">
                                            <p><strong style=";text-transform:uppercase;font-size:18px">SUPERMARKET/MALL</strong>  
                                            <li>D Mart - 1 km - 5 km</li>
                                            <li>Elpro City Square Mall - 7 km</li>
                                            
                                          </p>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon-text">
                                            <img src="assets/img/icon/paragliding.png" alt="">
                                            <p><strong style=";text-transform:uppercase;font-size:18px">CONNECTVITY </strong> 
                                          <li>Bus Stop - 1 km</li>
                                           <li>Nashik Phata - 10 km</li>
                                         <li>Chinchwad Rail Stn. - 9 km</li></p>
                                        </div>
                                       
                                    </div>
          <!-- <li data-aos="fade-up" data-aos-delay="500">
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="600">
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li> -->

        </ul>

      </div>
    </section> 
    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Team</h2>
          <p>Floor Plans</p>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/img/floor-plans/floor-3.jpg" class="img-fluid" alt="">
                
              </div>
              
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/floor-plans/floor-4.jpg" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/floor-plans/floor-5.jpg" class="img-fluid" alt="">
                
              </div>
              
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/floor-plans/floor-6.jpg" class="img-fluid" alt="">
               
              </div>
              
            </div>
          </div>

        </div>

      </div>
    </section> -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <!--<h2>Contact</h2>-->
          <p style="font-size: 36px;font-weight: 700;text-transform: uppercase;color: #2a2c39;">Location


 </p>
        </div>

        <div class="row mb-3">

        <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
            <h2><span class="d-block section-heading-sub text-capitalize">Contact Us</span></h2>
            <br>
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>SITE OFFICE :</h4>
                 <p>Gat No - 94, Dehu - Alandi Road, Near SNBP School, Chikali, Pune - 412114.</p> 
              </div>

              <div class="email">
                <i class="icofont-google-map"></i>
                <h4>CORPORATE OFFICE :</h4>
                 <p>’PAMNANI GROUP’, Opp. C Block B/23, Near Vaishno Devi Mandir, Pimpri, Pune 4110T7.</p> 
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                 <p>chahatrpamnani@gmail.com</p> 
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Contact NO:</h4>
              <p>+91 7741009009</p>
                <p></p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-sm-12">
           <center> <h2> <span class="d-block section-heading-sub text-capitalize">Location map</span> <br></h2></center>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.5135206627306!2d73.82838431744385!3d18.685813999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b7e7d51a4cc1%3A0xedb5557c8daf461c!2sSNBP%20INTERNATIONAL%20SCHOOL%20%26%20COLLEGE%2C%20CHIKHALI!5e0!3m2!1sen!2sin!4v1661233090472!5m2!1sen!2sin"  width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <!-- </div>
          <div class="col-md-6 col-md-6 map-div text-center">
        <span class="d-block section-heading-sub text-capitalize">Location Map</span>
       <img src="assets/img/Location.jpg" alt="">
        </div>
        </div> -->
       

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
    <div class="col-sm-12 col-xs-12 pull-center">
    <h5>Project By :</h5><br>
           <img src="assets/img/footer-logo.png" class="img-fluid"><br>
          
        </div>
      <!-- <h2>for Booking,contact: 7741009009</h2> -->
      <!-- <div class="maharera-block">
          <img src="assets/img/Maharera-logo.png" class="img-fluid maharera-no"><br> -->
        
        <!-- <h2>SITE OFFICE</h2>
       <h5> <p>Gat No - 94, Dehu - Alandi Rocd, Near SNBP School, Chil‹holi, Pune - 412114.</p> </h5>
       <h2>CORPORATE OFFICE :</h2>
       <h5> <p>’PAMNANI GROUP’, Opp. C Block B/23, Necr Vaishno Devi Mandir, Pimpri, Pune 4110T7.</p> </h5> -->
      </div>
      <!-- <p>If our thoughts match with the age we live in, then why not our homes? Let’s broaden our horizons & Adapt to the futuristic lifestyle today!</p>-->
      <!-- <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>  --> 
      
      <div class="row project-by">
       
          <!-- <img src="assets/img/download .png">&nbsp;&nbsp;&nbsp;&nbsp;    -->
        
        <div class="col-md-6 col-md-6 pull-left">
           <img src="assets/img/b1.png">
           <h6>Finance Partner</h6>
            
        </div> 
         <div class="col-md-6 col-md-6  pull-right column-margin">
          <img src="assets/img/Maharera-logo.png"> 
          <h6>MAHA RERA NO : P52100031742</h6>
        
        </div> 
      </div><br>
      <div class="copyright" >
        &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved by Shiv Associates and
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="https://digitaltokri.com/" target="_blank">Digital Tokri</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  
 <!-- ==============Whatsapp Static Button ========== --> 
 
   <!--<a href="https://wa.me/+918446092402?text=I'm%20interested%20in%2024%20Sunshine" target="_blank" class="float text-center">-->
   <!-- <i class="fa fa-whatsapp my-float" style="color:#fff;"></i>-->
   <!-- <img src="assets/img/wp.png" class="img-fluid mt-2" height="30" width="30">-->
   <!-- </a>-->


  <div class="down_enquiry d-block d-sm-none">
  <ul>
    <li><a href="https://wa.me/+91 7741009009?text=I'm%20interested%20in%20Horizon%20Project" target="_blank"><img src="assets/img/wp.png" width="30" alt=""></a></li>
    <li><a href="#" class="btn-buy" data-toggle="modal" data-target="#popModel">Enquire Now</a></li>
    <li><a href="tel:+91 7741009009"><i class="icofont-phone"></i>Call Now</a></li>
  </ul>
</div>
  <div id="popModel" data-target="#popModel" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
  
      <div class="modal-body">
         <div class="">
             <div class="row">
                 <div class="col-sm-5 col-xs-12 popimg">
                     <img src="assets/img/popup-1.jpeg" alt="popup-image" class="emailImage img-fluid img-responsive">
                 </div>
                 <div class="col-sm-7 col-xs-12 padd">
                     <!-- <h3>Launching Great Homes<span>&nbsp; With Amazing Prices</span></h3>
                    
                     <h6>2 & 3 BHK's in <b>CHIKHALI</b> Pradhikaran <b><h2>Book Now In ₹21000</h2></b></h6> -->
                     <!-- <form name="modelForm1" id="modelForm2" action="otpprocess.php" method="post" role="form"> -->
                     
                    <form action="send-mail.php" method="post">
                     <strong><h4>Enquire Now!</h4></strong>
                          
                         <?php echo $URLinfo; ?>
                    <div class="form-group">
                        <label> Name</label>
                        <input type="text" class="form-control fname" id="pname" name="pname" placeholder="Your Name" required>
                    </div>
                         
                     <div class="form-group">
                         <label> Email Id</label>
                        <input type="email" class="form-control" id="pemail" name="pemail" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                         <label> Mobile Number</label>
                        <input type="tel" class="form-control telli" id="pmobile" name="pmobile" placeholder="Your Mobile Number" maxlength="10" required>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-theme" id="">Send</button>
                         <!--<button type="submit" class="btn btn-primary btn-theme" name="submitEnquiry" id="send">Send</button>-->
                         <button type="button" class="btn btn-primary btn-theme" data-dismiss="modal" value="Close">Close</button>
                    </div>
                    </form> 
                 </div>
            </div>
        </div> 
 </div> 
    </div>

  </div>
</div>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="lightbox-plus-jquery.js"></script>


<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js">
    
</script>


<script>
$(document).ready(function(){

$('.buttons').click(function(){

    $(this).addClass('active').siblings().removeClass('active');

    var filter = $(this).attr('data-filter')

    if(filter == 'all'){
        $('.image').show(400);
    }else{
        $('.image').not('.'+filter).hide(200);
        $('.image').filter('.'+filter).show(400);
    }

});

$('.gallery').magnificPopup({

    delegate:'a',
    type:'image',
    gallery:{
        enabled:true
    }

});

});

<script  src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script>
    $(function () {
    setTimeout(function () {
        $("#popModel").modal('show');
      $('#popModel').trigger('show');
    }, 3000);
  });</script>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    $(".telli").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#your-mobile-error").html("Digits Only").show();
               return false;
        }
    });
    $(".fname").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });

   $("#send").click(function(){
   var name11 = $("#pname").val();
   var email1 =$("#pemail").val();
   var mobile1 = $("#pmobile").val();
   var source=jQuery("#utm_source").val();
   var capaignname=jQuery("#utm_campaign_name").val();
   var capaignid=jQuery("#utm_campaign_id").val();
   var capaigncity=jQuery("#utm_campaign_city").val();
   var patternn = /^[a-zA-Z ]*$/;
   var pattern2 = /^\d{10}$/;
   var epart1 =/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(name11 ==""){
          alert("Enter Your Name");
           $("#pname").focus();
           $("#pname").css("border","1px solid #ff0000")
           return false;  
        }
        if(!patternn.test(name11)){
           alert("Enter Name Only in Alphabates");
           $("#pname").focus();
           $("#pname").css("border","1px solid #ff0000")
           return false;
        }
        if(mobile1 ==""){
          alert("Enter Your Mobile Number");
           $("#pmobile").focus();
           $("#pmobile").css("border","1px solid #ff0000")
           return false;  
        }
        if (!pattern2.test(mobile1)) {
           alert("Enter Correct Mobile Number");
           $("#pmobile").focus();
           $("#pmobile").css("border","1px solid #ff0000;")
           return false;
        }
        if(email1 ==""){
          alert("Enter Your Email Id");
           $("#pemail").focus();
           $("#pemail").css("border","1px solid #ff0000")
           return false;  
        }
        if(!epart1.test(email1)){
           alert("Enter Correct Email Id");
           $("#pemail").focus();
           $("#pemail").css("border","1px solid #ff0000")
           return false;
        }
    
               jQuery('#send').html('Loading...');
                //utm_source='.$source.'&utm_campaign_name='.$camaign.'&utm_campaign_id='.$camaign_id.'&utm_campaign_city='.$camaign_city;   
                var datasting = 'pname='+name11+'&pemail='+email1+'&pmobile='+mobile1+'&utm_source='+source+'&utm_campaign_name='+capaignname+'&utm_campaign_id='+capaignid+'&utm_campaign_city='+capaigncity;  
                jQuery.ajax({
                    url:'libs/php/send-email.php',
                    data: datasting,
                    type:'POST',
                    success: function(response){
                     jQuery('#send').html('SEND');
                        // console.log(response);
                        if(response == 200){
                            //alert(response);
                            console.log(response);
                       window.location.replace("thank-you.php?utm_source="+source+"&utm_campaign_name="+capaignname+"&utm_campaign_id="+capaignid+"&utm_campaign_city="+capaigncity);
                        }else{
                        alert(response);
                            console.log(response);
                            alert("Sorry! Something went wrong, Please try again later.");
                           window.location.reload();
                        }
                    }           
                });
              
    });

    
$(document).ready(function(){

$('.buttons').click(function(){

    $(this).addClass('active').siblings().removeClass('active');

    var filter = $(this).attr('data-filter')

    if(filter == 'all'){
        $('.image').show(400);
    }else{
        $('.image').not('.'+filter).hide(200);
        $('.image').filter('.'+filter).show(400);
    }

});

$('.gallery').magnificPopup({

    delegate:'a',
    type:'image',
    gallery:{
        enabled:true
    }

});

});
// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
   
</script>


  </script>

<!-- Global site tag (gtag.js) - Google Ads: 300446205 -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=AW-300446205"></script>
<!--<script>-->
<!--  window.dataLayer = window.dataLayer || [];-->
<!--  function gtag(){dataLayer.push(arguments);}-->
<!--  gtag('js', new Date());-->

<!--  gtag('config', 'AW-300446205');-->
<!--</script>-->

<!-- Facebook Pixel Code -->
<!--<script>-->
<!--  !function(f,b,e,v,n,t,s)-->
<!--  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?-->
<!--  n.callMethod.apply(n,arguments):n.queue.push(arguments)};-->
<!--  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';-->
<!--  n.queue=[];t=b.createElement(e);t.async=!0;-->
<!--  t.src=v;s=b.getElementsByTagName(e)[0];-->
<!--  s.parentNode.insertBefore(t,s)}(window, document,'script',-->
<!--  'https://connect.facebook.net/en_US/fbevents.js');-->
<!--  fbq('init', '396509291832555');-->
<!--  fbq('track', 'PageView');-->
<!--</script>-->
<!--<noscript><img height="1" width="1" style="display:none"-->
<!--  src="https://www.facebook.com/tr?id=396509291832555&ev=PageView&noscript=1"-->
<!--/></noscript>-->
<!-- End Facebook Pixel Code -->

</body>

</html>