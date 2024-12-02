<?php

require_once '../model/CRUD_Appartement.php';

$config = new connexion();
$connexion = $config->getConnexion();

$crud = new CRUD_Appartement();
$crud->supprimerApp($_GET["reference"]);

echo "Appartement supprimé avec succès.";
header("location:../view/lister.php");exit;
?>
