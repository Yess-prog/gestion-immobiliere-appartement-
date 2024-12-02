<?php
class connexion {
    private $pdo;
    function __construct(){
        $dsn="mysql:host=localhost;dbname=gestionimmobilière";
        $user="root";
        $mdp="";
        $this->pdo=new PDO($dsn,$user,$mdp);
        
    }
    public function getConnexion(){
        return $this->pdo;
    }

}