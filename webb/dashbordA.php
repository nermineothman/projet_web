<?php
include 'core/reclamation.php';
include 'core/reclamationC.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Liv</title>
</head>

<body id="page-top">

          <li>Reclamations</li>
    
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
                  
                  <th></th>
                  </tr>
                </thead>
                
            
                
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
  <td><button type="submit">Repondre</button></td>
  
  
  
  
                  </tr>
                  <br><br>
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

</html>
