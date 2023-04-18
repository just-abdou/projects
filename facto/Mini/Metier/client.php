<?php

include_once("C:\wamp64\www\Projet_Web_TP-main\Mini\DAO\DAO.php");
require_once("C:\wamp64\www\Projet_Web_TP-main\Mini\Metier\personne.php");

class Client extends Personne{

    function save(){      
        $this->dao->ajouterClient($this);
    }

    static function afficher(){
        $dao = new DAO();
        return $dao->afficherClient();
    }

    static function total(){
        $dao = new DAO();
        return $dao->getClientTotal();
    }

    function setId($idd){
        $this->id = $idd;
    }

    function update($cli){
        $this->dao->updateClient($cli);
    }

    function getClient($cli){
        $this->dao->getClient($cli);
    }

    static function delete($cli){
        $dao = new DAO();
        $dao->deleteClient($cli);
    }
}
