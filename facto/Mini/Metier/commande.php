<?php
include_once("C:\wamp64\www\Projet_Web_TP-main\Mini\DAO\DAO.php");
require_once("C:\wamp64\www\Projet_Web_TP-main\Mini\Metier\approcom.php");

class Commande extends ApproCom{
    
    public function save(){
        $this->dao->ajouterCommande($this);
    }

    public static function afficher(){
        $dao = new DAO();
        return $dao->afficherCommande();
    }

    public static function total(){
        $dao = new DAO();
        return $dao->getCommandeTotal();
    }

    public static function getCommande($id){
        $dao = new DAO();
        return $dao->getCommande($id);
    }

    public static function delete($id){
        $dao = new DAO();
        return $dao->deleteCommande($id);
    }

}
