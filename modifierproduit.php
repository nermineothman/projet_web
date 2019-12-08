<html>
<head>
</head>
<body>
<?PHP
include "../core/produitC.php";
if (isset($_GET['nom'])){
	$produitC=new produitC();
    $result=$produitC->reccupererproduit($_GET['nom']);
	foreach($result as $row){
		$nom=$row['nom'];
		$entree=$row['entree'];
		$platPrincipal=$row['platPrincipal'];
		$dessert=$row['dessert'];
		$boissons=$row['boissons'];
		$tarif=$row['tarif'];
		
?>



<form method="POST">
<table>
<caption>Modifier Produit</caption>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $rnom ;?>"></td>
</tr>
<tr>
<td>entree</td>
<td><input type="text" name="entree" value="<?PHP echo $entree ;?>"></td>
</tr>
<tr>
<td>plat Principal</td>
<td><input type="text" name="platPrincipal" value="<?PHP echo $platPrincipal ;?>"></td>
</tr>
<tr>
<td>dessert</td>
<td><input type="text" name="dessert" value="<?PHP echo $dessert ;?>"></td>
</tr>
<tr>
<td>boissons</td>
<td><input type="number" name="boissons" value="<?PHP echo $boissons ;?>"></td>
</tr><tr>
<td>tarif</td>
<td><input type="number" name="tarif" value="<?PHP echo $tarif ;?>"></td>
</tr>

<tr>
	<td><input type="text" name="nom_ini" value="<?PHP echo $_GET['nom'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier']))
{
	$produit=new produit($_POST['nom'],$_POST['entree'],$_POST['platPrincipal'],$_POST['dessert'],$_POST['boissons'],$_POST['tarif']);
	$produitC->modifierproduit($produit,$_POST['nom_ini']);
	echo $_POST['nom_ini'];
	header('Location:  afficherP.php');
}
?>
</body>
</html>