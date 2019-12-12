<?PHP
include "../core/produitC.php";
$produitC=new produitCore();
if (isset($_POST["nom"]))
{
	$produitC->supprimerproduit($_POST["nom"]);
	header('Location: index.php');
}

?>