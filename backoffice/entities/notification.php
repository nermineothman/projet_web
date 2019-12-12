<?PHP

class notification
{
    private $comment_id;
	private $comment_subject;
    private $comment_text;
    private $comment_status;
  

	
	
	function __construct($comment_id,$comment_subject,$comment_text,$comment_status)
	{
        $this->comment_id=$comment_id;
        $this->comment_subject=$comment_subject;
        $this->comment_text=$comment_text;
        $this->comment_status=$comment_status;
       
        
		
		
	}
    function getcomment_id(){return $this->comment_id;}
    function getcomment_subject(){return $this->comment_subject;}
    function getcomment_text(){return $this->comment_text;}
    function getcomment_status(){return $this->comment_status;}
   
    
    function setcomment_id($comment_id){
		$this->comment_id=$comment_id;
    }
    function setcomment_subject($comment_subject){
		$this->comment_subject=$comment_subject;
	}
	function setcomment_text($comment_text){
		$this->comment_text=$comment_text;
	}
	function setcomment_status($comment_status){
		$this->comment_status=$comment_status;
	}

    

}

?>