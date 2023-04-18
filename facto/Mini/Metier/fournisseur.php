<?php
include_once("C:\wamp64\www\Projet_Web_TP-main\Mini\DAO\DAO.php");
require_once("C:\wamp64\www\Projet_Web_TP-main\Mini\Metier\personne.php");

class Fournisseur extends Personne{

    function save(){      
        $this->dao->ajouterFournisseur($this);
    }

    static function afficher(){
        $dao = new DAO();
        return $dao->afficherFournisseur();
    }
    
    function setId($idd){
        $this->id = $idd;
    }
    
    function update($cli){
        $this->dao->updateFournisseur($cli);
    }

    function getFournisseur($cli){
        $this->dao->getFournisseur($cli);
    }
    
    static function delete($cli){
        $dao = new DAO();
        $dao->deleteFournisseur($cli);
    }
}

?>