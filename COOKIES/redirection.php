<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$nb_visites = 1;

setcookie('prenom',$_POST['prenom'], time() + 36000);
setcookie('nom',$_POST['nom'], time() + 36000);

if(isset($_COOKIE['nb_visites']))
{
    $nb_visites = $_COOKIE['nb_visites'];
    $nb_visites ++;
    setcookie('nb_visites',$nb_visites, time() + 36000);
}else{
    setcookie('nb_visites',$nb_visites, time() + 36000);
}

echo "<a href='formulaire_cookie.php'>Lien vers formulaire</a>";