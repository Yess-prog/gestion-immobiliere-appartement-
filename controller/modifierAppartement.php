<?php
require_once '../model/connexion.php';
require_once '../model/CRUD_Appartement.php';
require_once "../model/immobilier.php";
require_once '../model/Appartement.php';

$config = new connexion();
$connexion = $config->getConnexion();

$appartement = new Appartement(
    $_POST['reference'],
    null, null, null, null, null,
    $_POST['surfaceEspaceCommun']
);

$crud = new CRUD_Appartement();
$crud->modifierApp($appartement);

echo "Appartement modifié avec succès.";
header("location:../view/lister.php");exit;
?>
