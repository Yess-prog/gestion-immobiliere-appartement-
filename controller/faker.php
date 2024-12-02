<?php
require_once '../model/connexion.php';

class FillDatabaseRandom {
    private $connexion;

    public function __construct($db) {
        
        $this->connexion =$db ;
    }

    public function populateData() {
        try {
            // Loop to generate 100 random entries
            for ($i = 1; $i <= 100; $i++) {
                // Random data for immobilier
                $reference = null;
                $proprietaire = "Proprietaire_" . uniqid();
                $localite = $this->getRandomCity();
                $surface = rand(50, 300) + (rand(0, 99) / 100); // Random float between 50 and 300
                $nbPieces = rand(1, 10);
                $domaineUsage = rand(0, 1) ? 'Résidentiel' : 'Commercial';

                // Insert into immobilier
                $stmt = $this->connexion->prepare("
                    INSERT INTO immobilier (reference, proprietaire, localité, surface, nbPieces, domaineUsage) 
                    VALUES (?, ?, ?, ?, ?, ?)
                ");
                $stmt->execute([$reference, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage]);

                // Randomly decide if it's an appartement or villa
                if (rand(0, 1)) {
                    // Data for appartement
                    $surfaceEspaceCommun = rand(5, 30) + (rand(0, 99) / 100); // Random float between 5 and 30
                    $stmt = $this->connexion->prepare("
                        INSERT INTO appartement (reference, surfaceEspaceCommun) 
                        VALUES (?, ?)
                    ");
                    $stmt->execute([$reference, $surfaceEspaceCommun]);
                }
            }

            echo "100 lignes insérées avec succès !";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    // Helper function to generate random cities
    private function getRandomCity() {
        $cities = ['Paris', 'Lyon', 'Marseille', 'Toulouse', 'Nice', 'Nantes', 'Strasbourg', 'Montpellier', 'Bordeaux', 'Lille'];
        return $cities[array_rand($cities)];
    }
}


$config = new connexion();
$connexion = $config->getConnexion();


$fillDatabaseRandom = new FillDatabaseRandom($connexion);
$fillDatabaseRandom->populateData();
?>
