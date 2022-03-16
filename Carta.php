<?php

    require_once __DIR__ . '/Prodotti.php';

    class Carta extends Prodotto {
        public $Prodotti;

        public function getProdotti($Prodotti, $primoProdotto) {
            return $this->$Prodotti = $primoProdotto;
        }

        public function setProdotti($Prodotti, $primoProdotto) {
            return $this->$Prodotti = $primoProdotto;
        }

    }
?>
