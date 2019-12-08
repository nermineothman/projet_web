<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/menu.php";

if (isset($_GET['nom'])){
	$menuC=new menuCore();
    $result=$menuC->recuperermenu($_GET['nom']);
	foreach($result as $row){
		$entree=$row['entree'];
		$nom=$row['nom'];
		$platPrincipal=$row['platPrincipal'];
		$dessert=$row['dessert'];
		$boissons=$row['boissons'];
		$tarif=$row['tarif'];
?>
<form method="POST">
<table>
<caption>Modifier menu</caption>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>entree</td>
<td><input type="text" name="entree" value="<?PHP echo $entree ?>"></td>
</tr>
<tr>
<td>platprincipal</td>
<td><input type="text" name="platPrincipal" value="<?PHP echo $platPrincipal ?>"></td>
</tr>
<tr>
<td>dessert</td>
<td><input type="text" name="dessert" value="<?PHP echo $dessert ?>"></td>
</tr>
<tr>
<td>tarif</td>
<td><input type="number" name="tarif" value="<?PHP echo $tarif ?>"></td>
</tr>
<tr>
<td>boissons/td>
<td><input type="text" name="boissons" value="<?PHP echo $boissons ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>

</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$menu=new menu($_POST['nom'],$_POST['boissons'],$_POST['entree'],$_POST['platPrincipal'],$_POST['dessert'],$_POST['tarif']);
	$menuC->modifiermenu($menu,$_POST['nom_ini']);
	echo $_POST['nom_ini'];
	header('Location: affichermenu.php');
}
?>
</body>
</HTMl>