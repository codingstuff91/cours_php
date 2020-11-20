<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies et sessions</title>
</head>
<body>
    <?php
        $prenom = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : "";
        $nom = isset($_COOKIE['nom']) ? $_COOKIE['nom'] : "";
    ?>

    <form action="redirection.php" method="post">
        <label for="">PRENOM :</label>
        <input type="text" name="prenom" value="<?php echo $prenom ?>">

        <label for="nom">NOM :</label>
        <input type="text" name="nom" value="<?php echo $nom ?>">

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>