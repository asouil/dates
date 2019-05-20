<?php
// Définit le fuseau horaire par défaut à utiliser. Disponible depuis PHP 5.1
date_default_timezone_set('UTC');


// Affichage de quelque chose comme : Monday
echo date("l");

// Affichage de quelque chose comme : Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');

// Affiche : July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

/* utilise les constantes dans le paramètre format */
// Affichage de quelque chose comme : Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822);

// Affichage de quelque chose comme : 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
?>