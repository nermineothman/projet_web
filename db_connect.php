<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "login_registration";

// crearte connection
$connect = new Mysqli($servername, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
	die("Connection Failed : " . $connect->error);
} else {
	// echo "Successfully Connected";	
}
/* class Config {
    private $db ; 
    private static $instance = NULL;
    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=login_registration', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  public function query($sql)
  {
    $req = $this->db->prepare($sql); 
    $req =execute();
    return $req->fetchAll();
  }  
  } */
?>