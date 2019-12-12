 <?PHP 
include_once "config.php";

class produitCore
{
    function getAllProduit()
	{
		$sql = "SElECT * From produits";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function getMenu()
	{
		$sql = "SElECT * From produits where valable=1";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerproduit($nom)
	{
		$db = config::getConnexion();
		$sql="DELETE FROM produits WHERE nom=:nom";
		$req = $db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try
		{
            $req->execute();
           
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function updateProduit($produit,$nom)
	{
		$nom=$produit->getNom();
		$description=$produit->getDescription();
		$prix=$produit->getPrix();
		$valable=$produit->getValable();
		$image=$produit->getImage();
		$sql = "UPDATE produits SET nom ='".$nom ."', description ='". $description."', prix=$prix ,valable=$valable , image ='".$image."' WHERE nom ='".$nom."'";
		$db = config::getConnexion();
		try {
		$db->exec($sql);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function creerProduit($produit)
	{
		$db = config::getConnexion();
		try{
			$nom = $produit->getNom();
			$description = $produit->getDescription();
			$prix = $produit->getPrix();
			$valable = $produit->getValable();
			$image = $produit->getImage();
			
			$db->exec("INSERT INTO produits(nom,description,prix,valable,image) VALUES(". $db->quote($nom) . ",".$db->quote($description).",".$db->quote($prix).",".$db->quote($valable).",".$db->quote($image).")"); 
			
			 
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	
	}
	function getProduit($choix,$value)
	{
		$sql = "SELECT * FROM produits WHERE $choix='".$value."'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}


}
?>