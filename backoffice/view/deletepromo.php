<?php


include "../entities/promo.php";
include "../core/promocore.php";

$id = $_GET["id"];

$promo = new promocore();
$promo->deletepromo($id);



echo "<script>window.open('viewpromo.php','_self')</script>";
