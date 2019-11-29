<?PHP
// include "/core/reclamation.php";
include 'core/init.php';
include 'core/reclamationC.php';
include "core/reclamation.php";


$reclamtionC = new reclamtionC();

$idd=$_GET['idrec'];
$rec = $reclamtionC->getRec($idd);

//fetchAll(): Retourne un tableau contenant tous les comptes
//            ==> tout le jeu d'enregistrements

foreach ($rec as $row) { }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>


<form method="POST">

	<div>
		<label for="contenue">Contenue reclamation: </label>
		<input type="text" name="contenue" placeholder="Contenue Reclamation" autocomplete="off" value="<?PHP echo $row['contenue'];  ?>" />
	</div>
	<br />

	<div>
		<button name="modifier" type="submit">Passer</button>
		<button type="reset">Cancel</button>
	</div>

</form>

Already sent ? Click <a href="listreclamation.php">Liste réclamation</a> 

</body>
</html>

<?PHP
if (isset($_POST["modifier"])) {

		
       
        echo"yes";
		//$rec = new Reclamtion($_GET['idrec'], $_POST['contenue']);
		$recc = new ReclamtionC();
		$recc->modifierReclamtion($_POST['contenue'], $_GET['idrec']);

	header('Location:listreclamation.php');
}


?>