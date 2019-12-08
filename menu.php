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
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
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
				<li><a href="../view/menu.php" class="active">Menu</a></li>
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


	<!-- Menu section -->
    <section class="section bg-light  top-slant-white bottom-slant-gray">
<br>
<br>
<br>
<div class="clearfix mb-5 pb-5">
  <div class="container-fluid">
    <div class="row" data-aos="fade">
      <div class="col-md-12 text-center heading-wrap">
        <h1 > ** Our Menu **</h1>
      </div>
    </div>
  </div>
</div>

<div class="container">
<div id="slider">

</div>
<div class="input">
  <DIV class="price">
    <div>From</div>
    <input id="id_cena_od" type="number" name="cena_od" value="5">
  </DIV>
  <DIV class="price">
    <div>To </div>
    <input id="id_cena_do" type="number" name="cena_do" value="20">
  </DIV>
</div>
</div>

<script src="slider.js"></script>
<div class="container">
<div class="row">
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
  
  

</div>

<td><form method="POST" action="rechercherProduit.php">
<h4>Recherche un menu :</h4>

 <input value="<?PHP echo $row['nom']; ?>" name="nom" id="nom">
 <input type="submit" name="rechercher" value="Find">
 </form>
     

        </tfoot>
       
      </table>
      
      <form method="POST" action="pdf.php">
                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-print" aria-hidden="true"></i></button>
                                <input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
                            </form>
      </div>
</div>      
<br>
<br>
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