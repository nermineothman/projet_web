<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Pulse - Restaurant HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Pulse Restaurant HTML Template">
	<meta name="keywords" content="pulse, restaurant, creative, html">
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
				<h2>Pulse<span>.</span></h2>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- menu -->
			<ul class="main-menu">
				<li><a href="../view/index.html" class="active">Home</a></li>
				<li><a href="../view/about.html">About us</a></li>
				<li><a href="../view/menu.html">Menu</a></li>
				<li><a href="../view/blog.html">Promotions</a></li>
				<li><a href="../view/contact.html">Contact</a></li>
			</ul>
			<div class="header-right">
				<p><span>Reservations</span> <i class="fa fa-phone"></i> 73 225 871</p>			
			</div>
		</div>
	</header>
	<!-- Header section end -->


	
	

<?PHP 
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['nom']) and isset($_POST['entree']) and isset($_POST['platPrincipal']) and isset($_POST['dessert'])and isset($_POST['boissons']) and isset($_POST['tarif']))
    

{   
	$produit1C=new produitC();
	$produit1=new produit($_POST['nom'],$_POST['entree'],$_POST['platPrincipal'],$_POST['dessert'],$_POST['tarif'],$_POST['boissons']);
	
	$produit1C->ajouterproduit($produit1);
	header('Location: ../view/afficherproduit.php');
}

?>
<body>

    <img src="plat.jpg" alt="">
  <fieldset> <center>
    <center><h2> description</h2></center> 
    <br>
    <p> 
	 </p> <br>
    <p>Des daurades toute fresh bien epicees selon votre envie et votre choix ,bien nettoyer a un prix tres resonable .....................................................................................20DT </p> <br>
<p>        </p> <br> 
 <p>       </p><br>
    <br>
    <p>        </p> <br> 
 <p>       </p><br>
 
    

<form form name="insertion" method="POST" action="panier.php">
<table>


<td><input  type="submit" name="ajouter" value="ajouter"></td>
</tr>
</table>
</form></center>
</fieldset>

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
											<button class="site-btn">send</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script>  <i class="fa fa-heart-o" aria-hidden="true"></i>
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
	<script src="https://wego.here.com/directions/mix//Le-surfin,-Avenue-Taieb-Mhiri,-Sousse-M%C3%A9dina,-Sousse:e-eyJuYW1lIjoiTGUgc3VyZmluIiwiYWRkcmVzcyI6IkF2ZW51ZSBUYWllYiBNaGlyaSwgU291c3NlIiwibGF0aXR1ZGUiOjM1Ljg0LCJsb25naXR1ZGUiOjEwLjYyNTYxLCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjEzODUxNDQ2OTE2MDU0NTF9?map=35.84,10.62561,15,normal&fb_locale=fr_FR"></script>
	<script src="js/map.js"></script>

    </body>
</html>