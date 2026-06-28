<?php

require_once __DIR__ . '/lib/validation/Validateur.php';

class StockManager
{
    private $lots;
    private $validateur;

    public function __construct()
    {
        $this->lots = array();
        $this->validateur = new Validateur();
    }

    public function ajouterLot($codeBarre, $dateExpiration, $quantite)
    {
        if (!$this->validateur->estDateExpirationValide($dateExpiration)) {
            echo "Erreur : la date d'expiration est invalide ou le produit est périmé.";
            return false;
        }

        $lot = array(
            "code" => $codeBarre,
            "expiration" => $dateExpiration,
            "quantite" => $quantite
        );

        $this->lots[] = $lot;

        return true;
    }

    public function listerLots()
    {
        return $this->lots;
    }
}