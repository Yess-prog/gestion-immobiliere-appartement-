<?php
require_once '../model/connexion.php';
require_once '../model/CRUD_Appartement.php';

$config = new connexion();
$connexion = $config->getConnexion();

$crud = new CRUD_Appartement();
$appartement = $crud->recupererApp($_GET['reference']);

if ($appartement) {
    echo "Appartement trouvé :<br>";
    echo "Référence : " . $appartement['reference'] . "<br>";
    echo "Surface Espace Commun : " . $appartement['surfaceEspaceCommun'] . "<br>";
} else {
    echo "Aucun appartement trouvé.";
}
?>
