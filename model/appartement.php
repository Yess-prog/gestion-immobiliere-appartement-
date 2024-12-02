<?php
class Appartement extends Immobilier {
    public $surfaceEspaceCommun;

    public function __construct($reference, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage, $surfaceEspaceCommun) {
        parent::__construct($reference, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage);
        $this->surfaceEspaceCommun = $surfaceEspaceCommun;
    }
}
