<?php

class Cibo {

     // VARIABILI - ATTRIBUTI CLASSI
    public $tipologiaCibo;
    public $ingredienti;
    public $peso;

     // FUNZIONE CONSTRUCTOR, RICHIESTA DELLE DET. PROPRIETA INSERITE
    public function __construct($tipologiaCibo, $ingredienti, $peso) {
        $this->setTipologiaCibo($tipologiaCibo);
        $this->setIngredienti($ingredienti);
        $this->setPeso($peso);
    }

    // FUNZIONE PER TIPO
    public function getTipologiaCibo() {
        return $this->food_type;
    }

    public function setTipologiaCibo($tipologiaCibo) {
        if (is_numeric($tipologiaCibo) && $tipologiaCibo <= 0) {
            return false;
        } else {
            return $this->tipologiaCibo = $tipologiaCibo;
        }
    }

    // FUNZIONE PER INGREDIENTI
    public function getIngredienti() {
        return $this->ingredienti;
    }

    public function setIngredienti($ingredienti) {
        if (is_numeric($ingredienti) && $ingredienti <= 0) {
            return false;
        } else {
            return $this->ingredienti = $ingredienti;
        }
    }

    // FUNZIONE PER PESO
    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        if (is_numeric($peso) && $peso <= 0) {
            return false;
        } else {
            return $this->peso = $peso . ' g';
        }
    }
}

$PrimoCibo = new Cibo('In The Nature Bio Biscotti con Spinaci', 'Farina di frumento, oli vegetali e spinaci disidartati', 210);
// var_dump($PrimoCibo);