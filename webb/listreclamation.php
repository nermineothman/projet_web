<?php
include 'core/reclamation.php';
include 'core/reclamationC.php';

var_dump($_POST);
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
  <td><a href="modifier.php?idrec=<?PHP echo $row['idrec']; ?>">	Update</a></td>

  <td>
				<form method="POST">
					<input type="submit" name="supprimer" value="supprimer">
					<input type="hidden" name="num" value="<?PHP echo $row['idrec'];  ?>">
				</form>
			</td>
  
  
  
                  </tr>
                  <br><br>
                  </tbody>
             
              <?php
           }
              ?>

<?PHP

	if (isset($_POST["supprimer"])) {
    echo "<script> alert('fzzzff') </script>";
		$reclamtion1C->supprimerReclamtion($_POST["num"]);
		header('Location:listreclamation.php');
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
