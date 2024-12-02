<!DOCTYPE html>
<html>
<head>
    <title>Rechercher un Appartement</title>
    <link rel="stylesheet" href="../bootstrap.css">
</head>
<body>
    <h1>Rechercher un Appartement</h1>
    <form action="../controller/rechercheApp.php" method="GET">
        <label for="reference">Référence :</label>
        <input type="text" name="reference" required><br>
        <button type="submit">Rechercher</button>
    </form>
</body>
</html>
