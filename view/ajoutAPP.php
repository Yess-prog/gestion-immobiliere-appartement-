<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.css">
</head>
<body>
    <form action="../controller/add.php" method="post">
        <fieldset>
            <legend>Ajout d'un appartement</legend>
            <label for="">reference</label>
            <input type="number" name="ref"><br>
            <label for="">proprietaire</label>
            <input type="text" name="prop"><br>
            <label for="">localité</label>
            <input type="text" name="loc"><br>
            <label for="">Domaine Usage</label>
            <select name="dom" id="">
                <option value="B">Bureau</option>
                <option value="D">Domicile</option>
            </select><br>
            <label for="">Nombre Pièces</label>
            <input type="number" name="nbp"><br>
            <label for="">surface</label>
            <input type="number" name="surf"><br>
            <label for="">surface espace commun</label>
            <input type="number" name="surfEC"><br>
            
            <input type="submit" value="Ajouter" name="send">

        </fieldset>
    </form>
    
</body>
</html>