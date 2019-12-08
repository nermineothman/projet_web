<?PHP
include "../core/produitC.php";
$produit1C=new produitCore();
$listeproduit=$produit1C->getMenu();
?> 

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Le surfin - Restaurant </title>
	<meta charset="UTF-8">
	<meta name="description" content="Le surfin Restaurant HTML Template">
	<meta name="keywords" content="Le surfin, restaurant, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>



</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="site-logo">
				<h2>Le Surfin<span>.</span></h2>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- menu -->
			<ul class="main-menu">
				<li><a href="../view/index.html">Home</a></li>
				<li><a href="../view/about.html">About us</a></li>
				<li><a href="../view/menu.html" class="active">Menu</a></li>
				<li><a href="../view/blog.html" >Promotions</a></li>
				<li><a href="../view/contact.html">Contact</a></li>
			</ul>
			<div class="header-right">
				<p><span>Reservations</span> <i class="fa fa-phone"></i> 73 225 871</p>			
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info section -->
	<section class="page-top-info set-bg" data-setbg="img/page-top-bg/2.jpg">
		<div class="ptf-center">
			<div class="container">
				<h2>The menu<span>.</span></h2>
			</div>
		</div>
	</section>
	<!-- Page info section end -->






    <?PHP

$liste=$produit1C->getMenu();
$i=0;
foreach ($liste as $row) {$i++;
                                ?>
  <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?PHP if($i%2==1) echo "100"; else echo "200";?> ">
    <div class="blog d-block">
      <a class="bg-image d-block" href="single.php" style="background-image: url('img/<?PHP echo $row['image'] ?> ');"></a>
      <div class="text">
        <h3><a href="single.php"><?PHP echo $row['nom'] ?></a></h3>
        <p class="sched-time"> <p><?PHP echo $row['description'] ?></p>
         <br>
        <span><?PHP echo $row['prix'] ?>DNT </span>
        
        </p>
       
      </div>
      
    </div>
  </div>
  <?PHP
}    
?>          
<br>

	<!-- Footer section -->
	<footer class="footer-section">
		<!-- map -->
		<div class="map-warp" id="map-canvas"></div>
		<div class="footer-bg-area set-bg" data-setbg="img/footer-bg.jpg">
			<div class="contact-form-area">
				<div class="container">
					<div class="col-lg-10 offset-lg-1">
						<div class="contact-form-warp">
							<div class="section-title">
								<i class="flaticon-026-chicken-1"></i>
								<h2>Reclamations</h2>
							</div>
							<!-- contact form -->
							<form class="contact-form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" placeholder="Name">
									</div>
									<div class="col-md-6">
										<input type="email" placeholder="E-mail">
									</div>
									<div class="col-md-12">
										<textarea placeholder="Message"></textarea>
										<div class="text-center">
											<button class="site-btn">Send Message</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script><i class="fa fa-heart-o" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>
	
    </body>
</html>