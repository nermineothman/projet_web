<?PHP
include "produitC.php";
$produit1C=new produitC();
$listeproduit=$produit1C->afficherproduits();

?>

<table border="1">
<tr>
	<td></td>
<td>nom</td>
<td>entree</td>
<td>platprincipal</td>
<td>dessert</td>
<td>tarif</td>
<td>boissons</td>

</tr>

<?PHP
foreach($listeproduit as $row){
	?>
	<tr>

	
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['entree']; ?></td>
	<td><?PHP echo $row['platPrincipal']; ?></td>
	<td><?PHP echo $row['tarif']; ?></td>
	<td><?PHP echo $row['dessert']; ?></td>
	<td><?PHP echo $row['boissons']; ?></td>
	<td><form method="POST" action="supprimerproduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['nom'];?>" name="nom">
	</form>
	</td>
	<td><a href="modifierproduit.php?nom=<?PHP echo $row['nom']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>