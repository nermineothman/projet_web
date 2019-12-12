<?php

include_once "config.php";



class promocore
{


    function addpromo($promo)
    {
        $sql = "insert into promo(dishname,price,date) values (:dishname, :price,:date)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $dishname = $promo->getdishname();
            $price = $promo->getprice();
            $date = $promo->getdate();

            $req->bindValue(':dishname', $dishname);
            $req->bindValue(':price', $price);
            $req->bindValue(':date', $date);
            $req->execute();
            return ($db->lastInsertId());
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function viewpromo()
    {
        $sql = "SELECT * FROM promo";
        $db = config::getConnexion();
        try {

            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function viewpromofromid($id)
    {
        $sql = "SELECT * FROM promo where id=$id";
        $db = config::getConnexion();
        try {

            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function deletepromo($id)
    {

        $sql = "DELETE FROM promo where id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function updatepromo($promo, $id)
    {
        $sql = "UPDATE promo SET dishname=:dishname,price=:price,date=:date WHERE id=:id";

        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $dishname = $promo->getdishname();
            $price = $promo->getprice();
            $date = $promo->getdate();



            $req->bindValue(':dishname', $dishname);
            $req->bindValue(':price', $price);
            $req->bindValue(':date', $date);
            $req->bindValue(':id', $id);


            $req->execute();
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }
}
