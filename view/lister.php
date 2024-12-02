<?php
require_once '../model/connexion.php';
require_once '../model/CRUD_Appartement.php';

$config = new connexion();
$connexion = $config->getConnexion();

$crud = new CRUD_Appartement();
$appartements = $crud->listerApp();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../bootstrap.css">
    <title>Liste des Appartements</title>
</head>
<body>
    <h1>Liste des Appartements</h1>
    <table border="1">
        <tr>
            <th>Référence</th>
            <th>Surface Espace Commun</th>
            <th>Propriétaire</th>
            <th>Localité</th>
            <th>Surface</th>
            <th>Nombre de Pièces</th>
            <th>Domaine d'Usage</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($appartements as $appartement): ?>
            <tr>
                <td><?= $appartement['reference'] ?></td>
                <td><?= $appartement['surfaceEspaceCommun'] ?></td>
                <td><?= $appartement['proprietaire'] ?></td>
                <td><?= $appartement['localité'] ?></td>
                <td><?= $appartement['surface'] ?></td>
                <td><?= $appartement['nbPieces'] ?></td>
                <td><?= $appartement['domaineUsage'] ?></td>
                <td>
                    <a href="modifierApp.php?reference=<?= $appartement['reference'] ?>">Modifier</a> |
                    <a href="../controller/supprimerAppartement.php?reference=<?= $appartement['reference'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
