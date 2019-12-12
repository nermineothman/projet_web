<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
      <div id="quicklink"><a href="#" title="Admin profile">Admin</a> |<a href="file:///C:/wamp64/www/m/backoffice/view/login.html" title="logout">logout</a></div>
  </div>
  <!-- end header -->


  <!-- main menu -->
  <div id="mainmenu">
      <ul>
          <li><a href="#" title="">Dashboard</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
         
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

      <!-- MAIN CONTENT-->
      <fieldset>
      <div class="main-content">
      <form action="ajoutProd.php" method="POST" enctype="multipart/form-data">  
      
      <div class="card" > 

                                    <div class="card-header">
                                    <br>
                                    <br>
                                       <center><strong> <h2>Ajouter un produit</h2> </strong> </center> 
                                    </div>
                                    <div class="card-body card-block" >
                                        
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nom du menu :</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                              
                                                    <input type="text" id="text-input" name="nom" value="" class="form-control" required>
                                        
                                                </div>
                                                <br>
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Description du menu :</label>
                                                    
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <textarea name="desc" id="" cols="90" rows="5"></textarea>
                                                    
                                                </div> 
                                                </div>    
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Prix du menu :</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email" name="prix" value="" class="form-control" required>
                                                </div>
                                              </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Limage du menu :</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="password-input" name="image" value="" class="form-control" required>
                                                  </div>
                                                  <br>
                                                  <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">valabilite du menu :</label>
                                                </div>
                                                
                                                <div class="col-12 col-md-9">
                                                    <input type="radio" id="password-input" name="validite" value="1" class="form-control">disponible
                                                    <input type="radio" id="password-input" name="validite" value="0" class="form-control">non disponible

                                                  </div>

                                                </div>
                                        
                                    </div> 
                                    <div class="card-footer">
                                        
                                        <input type="hidden" name="cin" value="">
                                        <input type="submit" name="ajouter" value="ajouter" class="btn btn-danger btn-sm">
                                         
                                    </div>
                                </div>
        </div>
        

  
  </form> 
  </fieldset>
        </div>

  </div>

  
</body>

</html>
<!-- end document-->