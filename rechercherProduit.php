<!DOCTYPE html>
<html lang="en">


  

<body class="animsition">
  
<div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
</br>
</br>
</br>
            <th>nom</th>
            <th>description</th>
            <th>prix</th>
           
         
          </tr>
        </thead>
        <tfoot>
          <?PHP
          include "../core/produitC.php";
          $produit1C=new ProduitCore();
          $listeproduits=$produit1C->rechercherProduit($_POST['nom']);
          ?>
          <?PHP
foreach($listeproduits as $row){
?>
<tr>
<td><?PHP echo $row['nom']; ?></td>
<td><?PHP echo $row['description']; ?></td>
<td><?PHP echo $row['prix']; ?></td>
<td><?PHP echo $row['image']; ?></td>

<td><a><img class="" src="uploads/<?php echo $row['image'];?>" style="width: 100px; height:100px;"></a></td>
<td><form method="POST" action="supprimerproduit.php">
<input type="submit" name="supprimer" value="supprimer">
<input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
</form>
</td>
<td><a href="modifierproduit.php?idP=<?PHP echo $row['nom']; ?>">
Modifier</a></td>
</tr>
<?PHP
}
?>

     

        </tfoot>

      </table>
      </div>
</div>                
                            

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
