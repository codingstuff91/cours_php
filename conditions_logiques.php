<?php

$age = 24;

/**
 * Dans cet exemple on va faire plusieurs tests logiques
 * Dans ces exemples, nous allons vérifier si l'utilisateur est majeur (age >= 18)
 */

// Opérateurs de comparaisons (Egal, différent, supérieur à, etc...)
// = (affectation de valeur)
// == (verification si c'est égal)
// != (different de)
// > (supérieur à)
// < (inférieur à)
// >= ou <= (supérieur ou égal ou inférieur ou égal)

// Conditions logiques simples (SI...SINON)
if($age >= 18){
    echo "Dégages Gamin t'as rien rien à faire là";
}else{
    echo "Bravo vous êtes majeur !!";
}

// Condition avec multiples conditions (OU : il faut qu'une de 2 conditions soient vraies pour que la condition globale renvoie VRAI)
if($age >= 18 || $age == 16){
    echo "Bravo vous êtes majeur !!";
}else{
    echo "Dégages Gamin t'as rien rien à faire là";
}

// Condition avec multiples conditions (ET : il faut que les 2 conditions soient vraies pour que la condition globale renvoie VRAI)
if($age >= 18 && $age == 16){
    echo "Bravo vous êtes majeur !!";
}else{
    echo "Dégages Gamin t'as rien rien à faire là";
}

// Conditions logiques avec plusieurs conditions Sinon (SI... SINON SI... SINON SI... SINON)
if($age >= 18){
    echo "Bravo vous êtes majeur !!";
}elseif($age == 16){
    echo "Tu es presque majeur, donc je te donne un accès partiel";
}else{
    echo "Dégages Gamin t'as rien rien à faire là";
}

// Conditions à choix multiples (SWITCH...CASE)
/**
 * Exemple d'un carnet de note ou l'on veut afficher une appréciation en fonction de la note obtenue
 */
$note = 10;

switch ($note) {
    case 20:
        echo "Excellent travail";
        break;
    case 15:
        echo "Très bon travail";
        break;
    case 10:
        echo "Peux mieux faire, tu as la moyenne";
        break;
}

// Conditions ternaires (Tests logiques binaires à 2 choix possibles, VRAI OU FAUX)

// On veut afficher le texte "Bravo vous êtes majeur", si l'age est >= à 18
$texte_a_afficher = $age >= 18 ? "Bravo vous êtes majeur" : "Dégages Gamin t'as rien rien à faire là";

echo $texte_a_afficher;