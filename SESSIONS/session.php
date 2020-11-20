<?php

session_start();

$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['nom'] = $_POST['nom'];

echo "<a href='page_interne.php'>Lien vers page interne</a>";