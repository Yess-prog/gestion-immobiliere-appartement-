<?php
require_once '../model/connexion.php';
require_once '../model/CRUD_Appartement.php';

$config = new connexion();
$connexion = $config->getConnexion();

$crud = new CRUD_Appartement();
$appartement = $crud->recupererApp($_GET['reference']);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../bootstrap.css">
    <title>Modifier un Appartement</title>
</head>
<body>
    <h1>Modifier un Appartement</h1>
    <?php if ($appartement): ?>
        <form action="../controller/modifierAppartement.php" method="POST">
            <input type="hidden" name="reference" value="<?= $appartement['reference'] ?>">
            
            <label for="surfaceEspaceCommun">Surface Espace Commun :</label>
            <input type="number" name="surfaceEspaceCommun" value="<?= $appartement['surfaceEspaceCommun'] ?>" step="0.01" required><br>

            <button type="submit">Modifier</button>
        </form>
    <?php else: ?>
        <p>Aucun appartement trouvé avec cette référence.</p>
    <?php endif; ?>
</body>
</html>
