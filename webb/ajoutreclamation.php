<?PHP
// include "/core/reclamation.php";
include 'core/init.php';
include 'core/reclamationC.php';


// form is submitted
if($_POST) {
	$reclamation_produit = $_POST['produit'];
	$reclamation_contenue = $_POST['contenue'];
	$reclamation_date = $_POST['date'];

	$rC = new reclamtionC();
				if($rC->ajouterReclamtion($reclamation_produit, $reclamation_contenue, $reclamation_date) == true) {
					echo "Successfully Registered <a href='login.php'>Login</a>";
				} else {
					echo "Error";
				}
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<div>
        <label for="produit">Produit: </label>
        <select name="produit" id="produit" >
				<option value="P1">Produit1</option>
				<option value="P2">Produit2</option>
				<option value="P3">Produit3</option>
		</select>
	</div>
	<br />

	<div>
		<label for="contenue">Contenue reclamation: </label>
		<input type="text" name="contenue" placeholder="Contenue Reclamation" autocomplete="off" value="<?php if($_POST) {
			echo $_POST['contenue'];
			} ?>" />
	</div>
	<br />

	<div>
		<label for="date">Date: </label>
		<input type="date" name="date" placeholder="Date" autocomplete="off" value="<?php if($_POST) {
			echo $_POST['date'];
			} ?>" />
	</div>
	<br />
	<div>
		<button type="submit">Passer</button>
		<button type="reset">Cancel</button>
	</div>

</form>

Already sent ? Click <a href="listreclamation.php">Liste réclamation</a> 

</body>
</html>