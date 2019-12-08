<?PHP
include "../core/produitC.php";
$produitC=new produitC();
if (isset($_POST["nom"]))
{
	$produitC->supprimerproduit($_POST["nom"]);
	header('Location: afficherproduit.php');
}

?>