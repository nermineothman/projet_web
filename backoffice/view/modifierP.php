<?PHP
include "../Core/produitC.php";
include "../entities/produit.php";


$nom=$_POST['nom'];  

$prix=$_POST['prix'];

$allowTypes = array('jpg','png','jpeg','gif','pdf');
$targetDir = "C:/wamp64/www/m/view/img/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(!empty($description)&&(in_array($fileType, $allowTypes)))
if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath))
{$produit = new produitCore();
    $prod = new produit($nom,$description,$prix,$valable,$fileName);
    $produit->updateProduit($prod,$nom);
     header('Location: index.php');
}
    else header('Location:index.php');

  ?>