<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php 
include "C:\wamp64\www\webb5\db_connect.php";

?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>BackOffice</title>
  <link type="text/css" href="./css/style.css" rel="stylesheet" />
  <!--[if lte IE 6]>
    <link type="text/css" href="./css/style_ie6.css" rel="stylesheet" />
  <![endif]-->
  <script type="text/javascript" src="./js/jquery-1.2.6.min.js"></script>
  <script type="text/javascript" src="./js/script.js"></script>
</head>

<body>
<div id="page">
    
  <!-- header -->
  <div id="header">
      <div id="logo"><h1><a href="#" title="lesurfin">Le surfin</a></h1></div>
      <div id="quicklink"><a href="#" title="Admin profile">Admin</a> |<a href="C:\wamp64\www\webb5\frontoffice\views\logout.php" title="logout">logout</a></div>
  </div>
  <!-- end header -->


  <!-- main menu -->
  <div id="mainmenu">
      <ul>
          <li><a href="#" title="">Dashboard</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li><a href="http://localhost/webb5/backoffice/view/addpromo.php" title="">Promotions</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li><a href="http://localhost/webb5/backoffice/view/dashboarda.php" title="">Reclamations</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
      </ul>
      </div>
    
  <!-- end mainmenu -->

    <div id="submenu">
        <ul>
           
            <li><a href="#" title="" class="active">Advanced search</a></li>
            
        </ul>
        <div class="clear"></div>
    </div>

  <!-- content -->
      <div id="content">

                <!-- block Fade in/out Message box -->

                <h3><span class="title"></span><span class="underlined">&nbsp;</span></h3>
                <input type="button" class="button" value="Click here to show message box" name="open_msgbox" id="open_msgbox" />
                <div class="msgbox" id="msgbox1">
                    <div class="icon"><img src="img/icons/alert.gif" alt="" title="" /></div>
                    <div class="text">
                        This block is used to display messages ( e.g. Your Page was successfully updated. )
                        <br />
                        click icon to close this message box!<br />
                    </div>
                    <div class="close"><a href="#" id="close_msgbox" title="Close message box"><img src="img/icons/icon_minus.gif" alt="" title="" /></a></div>
                    <div class="clear"></div>
                </div>
                <!-- end block Fade in/out Message box -->

                <!-- block example table -->

                <h3><span class="title">Gestion des menus</span><span class="underlined">&nbsp;</span></h3>
                <a class="add" href="http://localhost/m/backoffice/view/ajouterProduits.php" title="">ajouter un nouveau menu</a>
              
                <fieldset>
	<center>	<legend> <h1>Les Menus</h1> </legend></center>
<div class="main-content">
      <div class="row">
                           <div class="table-responsive table--no-card m-b-30">
                                   <center> <table class="table  table-striped table-earning">
                                        <thead>
                                            <tr>
												<th>Le nom du menu</th>
												<th>La description</th>
                                                <th>Le prix</th>
                                                <th>La valabilite</th>
                                                <th>l'image</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?PHP
										 include "../core/produitC.php";
										 $produit1C=new produitCore();
										 $liste=$produit1C->getMenu();
	                                        foreach ($liste as $row) {
		                                ?>
		                                <tr>
											<td><?PHP echo $row['nom']; ?></td>
											<td><?PHP echo $row['description']; ?></td>
			                                <td><?PHP echo $row['prix']; ?></td>
			                                <td><?PHP echo $row['valable']; ?></td>
                                            <td> <a href="img/<?PHP echo $row['image']; ?>" target="_blank">click here </a></td>
                                            <form action="modifierproduit.php" method="POST" >
			                                <td>
                                            <input type="hidden" name="nom" value="<?PHP echo $row['nom'];   ?>">
                                             <input type="submit" name="modifier" value="modifier"> 
                                             </form>
                                            </td>
                                            <form action="supprimerproduit.php" method="POST" >
                                            <td>
                                            <input type="hidden" name="nom" value="<?PHP echo $row['nom'];   ?>">
                                            <input type="submit" name="supprimer" value="supprimer">
                                            </td>
                                            </form>
			                                
		</tr>

                                        
                                        <?PHP
    }    
    
    ?>
     
                                   </tbody> </table></center>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center" style="text-align: center;">
           <center><p ><a href="ajouterProduits.php" class="btn btn-primary btn-sm">ajouter un produit</a></p></center>
          </div>
  
        </div>

  </div>  <form method="POST" action="pdf.php">
                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                                <i class="fa fa-print" aria-hidden="true"></i></button>
                                 
                            </form>
  </fieldset>

                 
  <!-- Footer -->
  <div id="footer">
      <ul>
          
          <li>&copy;2019 <a href="#" title="">LE SURFIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li>Powered by <a href="#" title="">LE SURFIN</a></li>
      </ul>
  </div>

</div>
<!-- end div page -->
</body>

</html>