<?php

class Facturer
{
    private $idClient;
    private $idFacture;
    private $nomFacture;
    private $montantFacture;

    public function __construct($idClient, $nomFacture, $montantFacture)
    {
        $this->idClient = $idClient;
        $this->nomFacture = $nomFacture;
        $this->montantFacture = $montantFacture;
    }

    public function setNomFacture($nomFacture)
    {
        $this->nomFacture = $nomFacture;
    }

    public function setMontantFacture($montantFacture)
    {
        $this->montantFacture = $montantFacture;
    }

    public function getNomFacture()
    {
        return $this->nomFacture;
    }
    public function getMontantFacture()
    {
        return $this->montantFacture;
    }

    public function getIdClient()
    {
        return $this->idClient;
    }

    public function getIdFacture()
    {
        return $this->idFacture;
    }

}
