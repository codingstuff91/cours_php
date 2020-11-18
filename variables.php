<?php
// On appelle le fichier fonctions.php à l'interieur de celui ci
include('fonctions.php');

// Variables (commencer par le signe $)
$texte = "Bienvenue sur mon premier site";
$nombre = 1;
$nombre_a_virgule = 1.5;

// Concaténation de texte et de variable (par ex : Bienvenue sur mon site Mallé)
$prenom = "Mallé";
$texte_a_afficher = "Bienvenue sur mon site " . $prenom;
echo "Bienvenue sur mon site " . $prenom;

// Ajout de code HTML dans une instruction PHP
echo "<p>Je suis un paragraphe</p>";

// Variables de type tableau - ARRAY (commencent à l'indice 0)
// 1. tableaux indéxés
// 2. tableaux associatifs

// 1. tableau indexé (par ex : un tableau contenant des fruits rouges): 
$tableau_index = [ "fraise", "framboise", "cassis"];

// si on veut afficher la valeur "framboise" il faudra écrire : 
echo $tableau_index[0];

// 2. Tableau associatifs, regroupant plusieurs éléments via un systeme de clé et de valeur.
$tableau_assoc = [ "prenom" => "Matthieu", "nom" => "Martin", "age" => 38 ];

// Si on veut afficher le prénom avec le nom de famille : 
echo $tableau_assoc["prenom"] . $tableau_assoc["nom"];

// Debugguer un tableau (indexé ou associatif) il faut utiliser la fonction var_dump()
var_dump($tableau_assoc);

// Ex utilisation de fonction : 
// On passe par la fonction dédiée pour afficher le prenom et le nom
afficherNomEtPrenom($tableau_assoc["prenom"], $tableau_assoc["nom"]);