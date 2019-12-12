<?PHP
class produit{
	private $nom;
	private $entree;
	private $platPrincipal;
    private $dessert;
	private $tarif;
	private $boissons;
	
	function __construct($nom,$entree,$platPrincipal,$dessert,$tarif,$boissons){
		$this->nom=$nom;
		$this->entree=$entree;
		$this->platPrincipal=$platPrincipal;
		$this->dessert=$dessert;
		$this->tarif=$tarif;
		$this->boissons=$boissons;
		
	}
	function getNom(){
		return $this->nom;
	}
	function getEntree(){
		return $this->entree;
	}
	function getPlatPrincipal(){
		return $this->platPrincipal;
	}
	function getDessert(){
		return $this->dessert;
	}
	
	
	function getTarif(){
		return $this->tarif;
	}
	function getBoissons(){
		return $this->boissons;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setEntree($entree){
		$this->entree=$entree;
	}
	function setPlatPrincipal($platPrincipal){
		$this->platPrincipal=$platPrincipal;
	}
	function setTarif($tarif){
		$this->tarif=$tarif;
	}
	function setBoissons($boissons){
		$this->boissons=$boissons;
	}
	
}

?>