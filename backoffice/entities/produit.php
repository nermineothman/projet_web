<?PHP
class produit{
	protected $nom;
    protected $description;
    protected $prix;
    protected $valable;
	protected $image;
    

	
	function __construct($nom,$description,$prix,$valable,$image){
        $this->nom=$nom;
        $this->description=$description;
        $this->prix=$prix;
        $this->valable=$valable;
		$this->image=$image;

	}
	function getNom(){
		return $this->nom;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
    function getDescription(){
		return $this->description;
	}
	function setDescription($description){
		$this->description=$description;
    }
    function getPrix(){
		return $this->prix;
	}
	function setPrix($prix){
		$this->prix=$prix;
    }
    function getValable(){
		return $this->valable;
	}
	function setValable($valable){
		$this->valable=$valable;
    }
    function getImage(){
		return $this->image;
	}
	function setImage($image){
		$this->image=$image;
    }
    
	
}

?>