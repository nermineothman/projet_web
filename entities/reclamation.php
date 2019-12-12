<?PHP

class Reclamtion
{
    private $idrec;
	private $idclient;
    private $produit;
    private $contenue;
    private $date;
    private $mail;

	function __construct($idrec,$idclient,$produit,$contenue,$date,$mail)
	{
        $this->idrec=$idrec;
        $this->idclient=$idclient;
        $this->produit=$produit;
        $this->contenue=$contenue;
        $this->date=$date;
        $this->mail=$mail;
        
	}
    function getIdrec(){return $this->Idrec;}
    function getIdclient(){return $this->idclient;}
    function getProduit(){return $this->produit;}
    function getContenue(){return $this->contenue;}
    function getDate(){return $this->date;}
    function getMail(){return $this->mail;}

    
    function setIdrec($idrec){
		$this->idrec=$idrec;
    }
    function setIdclient($idclient){
		$this->idclient=$idclient;
	}
	function setProduit($produit){
		$this->produit=$produit;
	}
	function setContenue($contenue){
		$this->contenue=$contenue;
	}

    function setDate($date)
    {
    	$this->date=$date;
    }
    function setMail($mail)
    {
    	$this->mail=$mail;
    }

}

?>