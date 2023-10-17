<?php
// SYNTAXE
/*
    <initialisation de compteur>;
    d{
        Bloc de code à répété (des instructions);
        <mise à jours>;
    }while(<codition d'arêt>);
*/
$compteur = 21;
do {
    echo "$compteur : Bienvenu à ETTI.";
    $compteur++;
}while ($compteur <= 30);

