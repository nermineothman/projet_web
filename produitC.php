<?PHP 
include_once "config.php";
class produitC
{  
		
	 function ajouterproduit($produit)
	{   
		    $nom=$produit->getnom();
            $entree=$produit->getentree();
            $platPrincipal=$produit->getplatPrincipal();
            $dessert=$produit->getdessert();
            $boissons=$produit->getboissons();
            $tarif=$produit->gettarif();
            
         
		$sql="insert into produit (nom,entree,platPrincipal,dessert,boissons,tarif) values ('$nom','$entree','$platPrincipal','$dessert','$boissons','$tarif')";
		$db = config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->execute();
        }
		catch(Exception $e)
		{
			echo "erreur:" .$e->getMessage();
		}
	}
	function afficherproduits()
	{
		
		$sql="SElECT * FROM produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	 function afficherproduit($produit)
	{
       echo "nom:".$produit->getnom()."<br>";
       echo "entree:".$produit->getentree()."<br>";
       echo "platPrincipal".$produit->getplatPrincipal()."<br>";
       echo "dessert:".$produit->getdessert()."<br>";
       echo "boissons:".$produit->getboissons()."<br>";
       echo "tarif:".$produit->gettarif()."<br>";
      
	}


		function modifierproduit($produit,$nom)
	{
		$sql="UPDATE menu SET nom=:nom, entree=:entree,platPrincipal=:platPrincipal,dessert=:dessert,boissons=:boissos,tarif=:tarifn WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
           $nom=$produit->getnom();
            $entree=$produit->getentree();
            $platPrincipal=$produit->getplatPrincipal();
            $dessert=$produit->getdessert();
            $boissons=$produit->getboissons();
            $tarif=$produit->gettarif();
            
		$datas=array(':nom'=>$nom,':entree'=>$entree,':platPrincipal'=>$platPrincipal, ':dessert'=>$dessert,':boissons'=>$boissons,':tarif'=>$tarif);
		
		$req->bindValue(':nom',$nom);
        $req->bindValue(':entree',$entree);
        $req->bindValue(':platPrincipal',$platPrincipal);
		$req->binValue(':dessert',$dessert);
		$req->binValue(':boissons',$boissons);
		$req->bindValue(':tarif',$tarif);
		

		$req->execute();
		$result = $req->fetch(PDO::FETCH_OBJ);
	    return $result;
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	 function supprimerproduit($nom)
	{
		$db = config::getConnexion();
		$sql="DELETE FROM produit WHERE nom=:nom";
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
	function reccupererproduit($nom)
	{
		$sql="SELECT * From produit where nom=$nom";
		$db=config::getConnexion();
		try
		{   
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>