<?php
class StockManager
{   
    private array $lots = [];
    public function ajouterLot(string $codeBarre, string $dateExpiration, int $quantite): bool
    {
        $lot = [
            'codeBarre' => $codeBarre,
            'dateExpiration' => $dateExpiration,
            'quantite' => $quantite
        ];
        $this->lots[] = $lot;
        return true;
    }
    public function listerLots(): array
    {
        return $this->lots;
    }
}