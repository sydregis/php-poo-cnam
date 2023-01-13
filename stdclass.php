<?php

require __DIR__.'/vendor/autoload.php';

$objet = new stdClass();
$objet->legumes=['Charles', 'Matteo', 'Alexandre', 'Louis', 'Abdel', 'Hassatou', 'Badr', 'Mathis'];
$objet->sushi='Daishi';
dump($objet);
dump($objet->legumes);
dump((array) $objet);

$tableau=[];
$tableau['legumes']=['Charles', 'Matteo', 'Alexandre', 'Louis', 'Abdel', 'Hassatou', 'Badr', 'Mathis'];
$tableau['sushi']='Daishi';
dump($tableau);
dump($tableau['legumes']);
