<?php



//$utm_source=$_SESSION['utm_source'];
//$utm_campaign_name=$_SESSION['utm_campaign_name'];
//$utm_campaign_id=$_SESSION['utm_campaign_id'];
//$utm_campaign_city=$_SESSION['utm_campaign_city'];


$utm_source = !empty($_GET['utm_source']) ? $_GET['utm_source'] : 'Corporate website';
$utm_campaign_name = !empty($_GET['utm_campaign_name']) ? $_GET['utm_campaign_name'] : 'Search';
$utm_campaign_id = !empty($_GET['utm_campaign_id']) ? $_GET['utm_campaign_id'] : 'Website';
$campaigncity = !empty($_GET['utm_campaign_city']) ? $_GET['utm_campaign_city'] : 'Pune';


$URLinfo = "<input type='hidden' name='utm_source' value='$utm_source' />"
        . "<input type='hidden' name='utm_campaign_name' value='$utm_campaign_name' />"
        . "<input type='hidden' name='utm_campaign_id' value='$utm_campaign_id'/>"
        . "<input type='hidden' name='utm_campaign_city' value='$campaigncity'/>"
        . "<input class='mobileCountry' type='hidden' name='country' />";

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="MegaLand - Multipurpose Landing Page Template">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thank You | Horizons</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Popup -->
    <link href="css/magnific-popup.css" rel="stylesheet">  
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="css/slick.css">
	<!-- MLIcons -->
	<link rel="stylesheet" href="css/mlicons.css" />
	<link rel="stylesheet" href="css/animate.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500%7CMontserrat:300,500,400,700" rel="stylesheet">
    <link href="css/lightgallery.css" rel="stylesheet">
    <!-- Custom Styles -->
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" href="css/responsive.css">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<style type="text/css">
	.intro-rstate-m .property-slider {
     position: relative; 
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    margin-top: 6%;
}
/* .intro-rstate-m{background: #d2ac67;} */
.logo{
	/*margin: 0 auto;*/
	/*width:100%; */
	height: 100px;
	width: 100px;
}
.intro-rstate-m .property-slider {margin-top: 1%;}
.intro .megaland-nav {margin-bottom: 0;padding: 10px 0 0 0;}
.response-section{
    background: rgba(0, 0, 0, 0.7);
    width: 30%;
    color: #ffffff;
    text-align: center;
    padding: 20px;
    margin-top: 13%;
}
@media (max-width: 768px) {
  .response-section{
    display: block;
    width: 60%;
    padding: 20px;
    font-size: 25px;
  }
  .thank-you-bg{
  height: 640px;
  width: 100%;
  text-align: center;
}
}
@media (max-width: 575px) {
  .response-section{
    display: block;
    width: 60%;
    padding: 20px;
    font-size: 17px;
  }
  .thank-you-bg{
  height: 500px;
  width: 100%;
  text-align: center;
  }
}
</style>
<body>


<?php


 if(strtolower($utm_source) == 'google' && strtolower($utm_campaign_name) == 'search') 

 
	{
	    ?>

       <!-- Global site tag (gtag.js) - Google Ads: 300446205 -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=AW-300446205"></script>-->
<!--<script>-->
<!--  window.dataLayer = window.dataLayer || [];-->
<!--  function gtag(){dataLayer.push(arguments);}-->
<!--  gtag('js', new Date());-->

<!--  gtag('config', 'AW-300446205');-->
<!--</script>-->

        
        <!-- Event snippet for 24 Sunshine Towers conversion page -->
    <!--<script>-->
    <!--    gtag('event', 'conversion', {'send_to': 'AW-300446205/Vo1cCK6nxPQCEP3joY8B'});-->
    <!--</script>-->

        <?php	    
        	}
        ?>
        
        
        
<?php


 if(strtolower($utm_source) == 'facebook') 

 
	{
	    ?>

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

<!--<script>-->
<!--  fbq('track', 'Contact');-->
<!--</script>-->


        <?php	    
        	}
        ?>
    
    
    
<!-- Header Intro -->
<section id="intro" class="intro intro-rstate-m thank-you-bg img-responsive">
	
	<div class="row mx-auto" align="center">
		<div class="col-sm-12">
			<div class="response-section">
				<h1 class="text-center">
					Thank You!
				</h1>
				<p class="text-center">Your Enquiry Has Been Received </p>
				<p class="text-center">You will be contacted by one of our representative</p>		
				<a href="index.php">Back To Homepage</a>
			</div><!-- Ends: .slider-details -->
		</div>
	</div>
		
</section><!-- End Header intro -->

<!-- Contact -->

<!-- Footer -->
<footer class="footer rem-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <!--  <p>Copyright &copy; 2021 and Designed by <a href="https://digitaltokri.com/" target="_blank">Digital Tokri</a></p> -->
                <ul class="list-unstyled footer-social">
                	<!-- <li><a href="https://www.facebook.com/maisonchasse"><i class="fa fa-facebook"></i></a></li> -->
                	<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                	<li><a href="#"><i class="fa fa-instagram"></i></a></li>
                	<li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                </ul>
            </div>
        </div><!-- /.row -->
    </div>
</footer><!-- End Footer -->



	<!-- ===============================
		JavaScript Files
	================================ -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/cascade-slider.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/prefixfree.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfTM7tE8XcnfY9EPIguVN_DaZiI76BGco"></script>
    <script src="js/map.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/lightgallery-all.js"></script>
	<script src="js/custom.js"></script>
	
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
  
</body>


</html>
