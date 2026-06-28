<?php

require_once __DIR__ . '/StockManager.php';

$gestionStock = new StockManager();

$gestionStock->ajouterLot(
    '1234567890123', 
    '2027-01-01', 
    50              
);

$listeLots = $gestionStock->listerLots();

foreach ($listeLots as $lot) {
    echo "Code-barres : " . $lot['codeBarre']
        . " | Expiration : " . $lot['dateExpiration']
        . " | Quantité : " . $lot['quantite']
        . PHP_EOL;
}