<?php

// On crée une variable age
$age = 30;

// On veut afficher le texte "Bravo vous êtes majeur", si l'age est >= à 18 sinon on affiche "Vous êtes encore mineur, dommage"
$texte_a_afficher = $age >= 18 ? "Bravo vous êtes majeur" : "Vous êtes encore mineur, dommage";

echo $texte_a_afficher;