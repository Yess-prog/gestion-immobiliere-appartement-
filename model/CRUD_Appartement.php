<?php
require_once "connexion.php";
class CRUD_Appartement {
    private $connexion;

    public function __construct() {
        $connexion=new connexion();
        $this->connexion=$connexion->getConnexion();
        
    }

    public function ajouterApp($appartement) {
        $stmt = $this->connexion->prepare("
            INSERT INTO appartement (reference, surfaceEspaceCommun) 
            VALUES (:reference, :surfaceEspaceCommun)
        ");
        $stmt->execute([
            ':reference' => $appartement->reference,
            ':surfaceEspaceCommun' => $appartement->surfaceEspaceCommun,
        ]);
        return $stmt;
    }

    public function recupererApp($ref) {
        $stmt = $this->connexion->prepare("
            SELECT * FROM appartement 
            WHERE reference = :reference
        ");
        $stmt->execute([':reference' => $ref]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function supprimerApp($ref) {
        $stmt = $this->connexion->query("
            DELETE FROM appartement 
            WHERE reference = $ref
        ");
        
    }

    public function modifierApp($appartement) {
        $stmt = $this->connexion->prepare("
            UPDATE appartement 
            SET surfaceEspaceCommun = :surfaceEspaceCommun 
            WHERE reference = :reference
        ");
        $stmt->execute([
            ':reference' => $appartement->reference,
            ':surfaceEspaceCommun' => $appartement->surfaceEspaceCommun,
        ]);
    }

    public function listerApp() {
        $stmt = $this->connexion->query("
            SELECT 
                a.reference, 
                a.surfaceEspaceCommun,
                i.proprietaire, 
                i.localité, 
                i.surface, 
                i.nbPieces, 
                i.domaineUsage
            FROM appartement a
            INNER JOIN immobilier i ON a.reference = i.reference
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all results as an associative array
    }
    

    /**
     * Get the value of connexion
     */
    public function getConnexion()
    {
        return $this->connexion;
    }
}
