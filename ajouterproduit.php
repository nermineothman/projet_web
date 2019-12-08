
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
				<li><a href="index.html" class="active">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="menu.html">Menu</a></li>
				<li><a href="blog.html">Promotions</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<div class="header-right">
				<p><span>Reservations</span> <i class="fa fa-phone"></i> 73 225 871</p>			
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/slider/slider-1.jpg">
				<div class="hs-content">
					<div class="hsc-warp">
						<h2>Food and more<span>.</span></h2>
						<p>By Chef Francis Smith</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider/slider-2.jpg">
				<div class="hs-content">
					<div class="hsc-warp">
						<h2>Special Dish<span>.</span></h2>
						<p>By Chef Francis Smith</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider/slider-3.jpg">
				<div class="hs-content">
					<div class="hsc-warp">
						<h2>Hygienic Food<span>.</span></h2>
						<p>By Chef Francis Smith</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
	

<?PHP 
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['nom']) and isset($_POST['entree']) and isset($_POST['platPrincipal']) and isset($_POST['dessert'])and isset($_POST['boissons']) and isset($_POST['tarif']))
    

{   
	$produit1C=new produitC();
	$produit1=new produit($_POST['nom'],$_POST['entree'],$_POST['platPrincipal'],$_POST['dessert'],$_POST['tarif'],$_POST['boissons']);
	
	$produit1C->ajouterproduit($produit1);
	header('Location: afficherproduit.php');
}

else
{
	echo "vérifier les champs";
}
?>
<body>
	<fieldset>
<form form name="insertion" method="POST" action="ajouterproduit.php">
<table>
<caption>  <center> Ajouter un menu </center></caption>
<tr>
        <td>nom</td>
        <td><input type="text" name="nom"></td>
        </tr>
<tr>
<td>entree</td>
<td><input type="text" name="entree"></td>
</tr>
<tr>
<td>platPrincipal</td>
<td><input type="text" name="platPrincipal"></td>
</tr>
<tr>
<td>dessert</td>
<td><input type="text" name="dessert"></td>
</tr>
<tr>
  <td>boissons</td>
 <td><input type="number" name="boissons"></td>
  </tr>
<tr>
<td>tarif</td>
<td><input type="number" name="tarif"></td>
</tr>

           
<tr>

<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
</table>
</form>
</fieldset>
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