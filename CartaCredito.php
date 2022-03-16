<?php
    class CartaCredito {
        public $numbero;
        public $banca;
        public $nSegreto;
        public $scadenza;

        public function __construct($numbero, $banca, $nSegreto, $scadenza)
        {
            $this->numbero = $numbero;
            $this->banca = $banca;
            $this->nSegreto = $nSegreto;
            $this->scadenza = $scadenza;
        }

        public function getNumbero()
        {
            return $this->numbero;
        }

        public function setNumbero($numbero)
        {
            $this->numbero = $numbero;

            return $this;
        }

        public function getBanca()
        {
            return $this->banca;
        }

        public function setBanca($banca)
        {
            $this->banca = $banca;

            return $this;
        }

        public function getNSegreto()
        {
            return $this->nSegreto;
        }

        public function setNSegreto($nSegreto)
        {
            $this->nSegreto = $nSegreto;
            return $this;
        }

        public function getScadenza() {
            return $this->scadenza;
        }

        public function setScadenza($scadenza) {
            $this->scadenza = $scadenza;
            return $this;
        }
    }

    $CartaCredito = new CartaCredito('51699901', 'BCC', 225, '06/26');
    // var_dump($CartaCredito);