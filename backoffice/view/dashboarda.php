
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php 
include "C:\wamp64\www\webb5\db_connect.php";
include 'C:\wamp64\www\webb5\backoffice\entities\reclamation.php';
include 'C:\wamp64\www\webb5\backoffice\core\reclamationC.php';
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


<body id="page-top">
<div id="page">

  <!-- header -->
  <div id="header">
      <div id="logo"><h1><a href="#" title="lesurfin">Le surfin</a></h1></div>
      <div id="quicklink"><a href="#" title="Admin profile">Admin</a> |<a href="file:///C:/wamp64/www/webb5/backoffice/view/login.html" title="logout">logout</a></div>
  </div>
  <!-- end header -->


  <!-- main menu -->
  <div id="mainmenu">
      <ul>
          <li><a href="#" title="">Dashboard</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
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
          <h3>Reclamation</h3>
    
          <div class="card-body">
          <?PHP
        
          $reclamtion1C=new reclamtionC();
          ?>
          

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  
                  <th>Produit</th>
                  <th>Contenue</th>
                  <th>Date</th>
                  <th>adresse Email</th>
                  <th>Reponse</th>

                  
                  <th></th>
                  </tr>
                </thead>
                
            
                <br>
                  <?PHP

$listereclamtions = $reclamtion1C->afficherReclamtions();
?>


                <?PHP
foreach($listereclamtions as $row){
  ?>
                  
               <tbody>
                  <tr>

  <td><?PHP echo $row['produit']; ?></td>
  <td><?PHP echo $row['contenue']; ?></td>
  <td><?PHP echo $row['datee']; ?></td>
  <td><?PHP echo $row['mail']; ?></td>


  <td><a href="send_msg.php?idrec=<?PHP echo $row['idrec']; ?>">Repondre</a></td>
  <td><a href="send_mail.php?idrec=<?PHP echo $row['idrec']; ?>">Rep_mail</a></td>
  
  
  
  
                  </tr>
        
                  </tbody>
             
              <?php
              
           }
              ?>
              
              </table>
            </div>
          </div>
          
        </div>

        
      </div>
    

  </div>
 
</body>
<div id="footer">
      <ul>
          
          <li>&copy;2019 <a href="#" title="">LE SURFIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li>Powered by <a href="#" title="">LE SURFIN</a></li>
      </ul>
  </div>

</div>
</html>
