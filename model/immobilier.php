<?php
class Immobilier {
    public $reference;
    public $proprietaire;
    public $localite;
    public $surface;
    public $nbPieces;
    public $domaineUsage;

    public function __construct($reference, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage) {
        $this->reference = $reference;
        $this->proprietaire = $proprietaire;
        $this->localite = $localite;
        $this->surface = $surface;
        $this->nbPieces = $nbPieces;
        $this->domaineUsage = $domaineUsage;
    }
}
