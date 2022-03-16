<?php

class Gioco {

    // VARIABILI - ATTRIBUTI CLASSI PER IL GIOCO
    public $nomeGioco;
    public $colore;
    public $materiale;
    public $grandezza;

    // FUNZIONE CONSTRUCTOR, RICHIESTA DELLE DET. PROPRIETA INSERITE
    public function __construct($nomeGioco, $colore, $materiale, $grandezza) {
        $this->setnomeGioco($nomeGioco);
        $this->setColore($colore);
        $this->setMateriale($materiale);
        $this->setGrandezza($grandezza);
    }

    // FUNZIONE PER NOME GIOCO
    public function getnomeGioco() {
        return $this->nomeGioco;
    }

    public function setnomeGioco($nomeGioco) {
        $this->nomeGioco = $nomeGioco;
        return $this;
    }

    // FUNZIONE PER COLORE GIOCO
    public function getColore() {
        return $this->colore;
    }

    public function setColore($colore) {
        $this->colore = $colore;
        return $this;
    }

    // FUNZIONE PER MATERIALE GIOCO
    public function getMateriale() {
        return $this->materiale;
    }

    public function setMateriale($materiale) {
        $this->materiale = $materiale;
        return $this;
    }

    // FUNZIONE PER GRANDEZZA GIOCO
    public function getGrandezza() {
        return $this->grandezza;
    }

    public function setGrandezza($grandezza) {
        $this->grandezza = 'Taglia ' . $grandezza;
        return $this;
    }
}

$primoGioco = new Gioco ('KONG Airdog Squeaker Football', 'Giallo', 'Gomma, feltro e tessuto', 'M');
// var_dump($primoGioco);


?>