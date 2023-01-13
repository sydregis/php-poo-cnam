<?php declare(strict_types = 1);

require __DIR__.'/Voiture.php';   
// Récuperation du code situé dans le fichier Voiture.php (économie de temps).
// __DIR__ est une constante magique.
// '/Voiture.php' est une chaîne de caractères dotée d'un opérateur de concaténation.

$v = new Voiture();
$v2 = new Voiture();

// Getter et Setter : fonctions pour accès à variables privées.

// avant les fonctions Getter/Setter : $v->marque='BMW';
$v->setMarque('BMW');
// avant les fonctions Getter/Setter : echo $v->marque;
echo $v->getMarque();
echo "\n"; // saut de ligne (--> avec anti-slash).
// exit(); pour mettre fin au déroulement du script.
echo $v2->getMarque();
echo "\n"; 


$v->setModele('Z4');
echo $v->getModele();
echo "\n"; 

echo $v2->getModele();
echo "\n";


$v->setNbre_de_chevaux(310);
echo $v->getNbre_de_chevaux();
echo "\n"; 

echo $v2->getNbre_de_chevaux();
echo "\n";


$v->setVitesse(220.5);
echo $v->getVitesse();
echo "\n";  

echo $v2->getVitesse();
echo "\n";


$v->setPassagers(2);
echo $v->getPassagers();
echo "\n"; 

echo $v2->getPassagers();
echo "\n";

