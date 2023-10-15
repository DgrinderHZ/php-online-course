<?php 
// match, jours de la semaine
	$jour = 6;
    $sentence = match ($jour) {
        1 => "Aujourd'hui c'est Lundi",
        2 => "Aujourd'hui c'est Mardi",
        3 => "Aujourd'hui c'est Mercredi",
        4 => "Aujourd'hui c'est Jeudi",
        5 => "Aujourd'hui c'est Vendredi",
        6 => "Aujourd'hui c'est Samedi",
        7 => "Aujourd'hui c'est Dimanche",
        default => "Numero invalide."
    };

    echo $sentence;

