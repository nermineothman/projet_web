<?PHP
include "../Core/produitC.php";

include "../entities/produit.php";
$test=0;
$msg="";
$allowTypes = array('jpg','png','jpeg','gif','pdf');
$targetDir = "C:/wamp64/www/m/frontoffice/view/img/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$nom=$_POST['nom'];
$desc=$_POST['desc'];
$prix=$_POST['prix'];
$validite=$_POST['validite'];
if(empty($nom)||(strlen($nom)>15))
$test=1;
if(empty($desc))
$test=2;
if(empty($prix))
$test=3;
if(!isset($_POST['validite']))
$test=4;
if(empty($_FILES["image"]["name"]))
{
$test=5; 
if(!in_array($fileType, $allowTypes)) 
$test=6; 
}
if($test==0)
{
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath))
    {
        $prod = new produit($nom,$desc,$prix,$validite,$fileName);
        $produit = new produitCore();
        $produit->creerProduit($prod);
        header('Location: index.php');
    }
    else
    header('Location: ajouterProduits.php');
}
else
echo $test; 





?>