<html>
<head>
</head>
<body>
<?PHP
include "produitC.php";
if (isset($_GET['refproduit'])){
	$produitC=new produitC();
    $result=$produitC->reccupererproduit($_GET['refproduit']);
	foreach($result as $row){
		$refproduit=$row['refproduit'];
		$nomproduit=$row['nomproduit'];
		$marque=$row['marque'];
		$description=$row['description'];
		$urlimage=$row['urlimage'];
		$quantite=$row['quantite'];
		$prixproduit=$row['prixproduit'];
		$dateajout=$row['dateajout'];
?>



<form method="POST">
<table>
<caption>Modifier Produit</caption>
<tr>
<td>refproduit</td>
<td><input type="text" name="refproduit" value="<?PHP echo $refproduit ;?>"></td>
</tr>
<tr>
<td>nomproduit</td>
<td><input type="text" name="nomproduit" value="<?PHP echo $nomproduit ;?>"></td>
</tr>
<tr>
<td>marque</td>
<td><input type="text" name="marque" value="<?PHP echo $marque ;?>"></td>
</tr>
<tr>
<td>description</td>
<td><input type="text" name="description" value="<?PHP echo $description ;?>"></td>
</tr>
<tr>
<td>quantite</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ;?>"></td>
</tr>
<tr>
<td>prixproduit</td>
<td><input type="number" name="prixproduit" value="<?PHP echo $prixproduit ;?>"></td>
</tr>

<tr>
	<td>dateajout</td>
	<td><input type="date" name="dateajout" value="<?PHP echo $dateajout;?>"></td>
</tr>
<tr>
    <td>refcategorie</td>
    <td><input type="text" name="refcategorie" value="<?PHP echo $refcategorie;?>"></td>
</tr>
<tr>
	<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
	<td><input type="hidden" name="refproduit_ini" value="<?PHP echo $_GET['refproduit'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier']))
{
	$produit=new produit($_POST['refproduit'],$_POST['nomproduit'],$_POST['marque'],$_POST['description'],$_POST['quantite'],$_POST['prixproduit'],$_POST['dateajout'],$_POST['refcategorie']);
	$produitC->modifierproduit($produit,$_POST['refproduit_ini']);
	echo $_POST['refproduit_ini'];
	header('Location:  afficherP.php');
}
?>
</body>
</html>