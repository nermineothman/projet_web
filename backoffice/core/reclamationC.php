<?PHP
include "C:\wamp64\www\webb5\db_connect.php";
// include "/core/reclamationC.php";

class reclamtionC {
function afficherReclamtion ($reclamtion){
		echo "Id_rec: ".$reclamtion->getIdrec()."<br>";
		echo "Id_Client: ".$reclamtion->getIdclient()."<br>";
		echo "Produit: ".$reclamtion->getProduit()."<br>";
		echo "contenue: ".$reclamtion->getContenue()."<br>";
		echo "date: ".$reclamtion->getDate()."<br>";
		echo "mail: ".$reclamtion->getMail()."<br>";

	}
	
	function getRec($id)
	{ 		global $connect;

		$sql = "SELECT * from reclamation where idrec=$id";
			$compte = $connect->query($sql);
			return $compte;
	}
	
	function ajouterReclamtion($reclamation_produit, $reclamation_contenue, $reclamation_date, $reclamation_mail){
	global $connect;

	/* $reclamation_produit = $_POST['produit'];
	$reclamation_contenue = $_POST['contenue'];
	$reclamation_date = $_POST['date']; */

	if($reclamation_produit == "") {
		echo " * produit is Required <br />";
	}

	if($reclamation_contenue == "") {
		echo " * contenue is Required <br />";
	}

	if($reclamation_date == "") {
		echo " * date is Required <br />";
	}
	if($reclamation_mail == "") {
		echo " * Mail is Required <br />";
	}

	 /*var_dump($reclamation_mail);
	die(); */

	$sql = "INSERT INTO reclamation (idclient, produit, contenue, datee, mail) VALUES ('1', '$reclamation_produit', '$reclamation_contenue', '$reclamation_date','$reclamation_mail')";
	$query = $connect->query($sql);
	
	/* var_dump($connect->error);
	die(); */
 
    if($query === TRUE) {
		return true;
	} else {
		return false;
	}
 
    // close the database connection
    $connect->close();
	}
	
	function afficherReclamtions(){
		global $connect;
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql= "SELECT * From reclamation";
		// $db = config::getConnexion();
		$liste = $connect->query($sql);
		return $liste;
	}
	function supprimerReclamtion($id){
		//echo "<script> alert('fff') </script>";
		global $connect;

		$sql="DELETE FROM reclamation where idrec= '$id'";
		
		$query = $connect->query($sql);
	
		// close the database connection
		$connect->close();
		
	}

	function modifierReclamtion($reclamtion,$id){
		global $connect;
		$sql="UPDATE reclamation SET contenue='$reclamtion' WHERE idrec='$id' ";
		
		$query = $connect->query($sql);
	
		// close the database connection
		$connect->close();
		

		header('Location: ../../webb5/listreclamation.php');
       
        }
		
	
	
	}

	


?>