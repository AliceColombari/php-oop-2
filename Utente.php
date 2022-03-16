<?php
    class Utente {
        public $nomeUtente;
        public $cognomeUtente;

        public function __construct($nomeUtente, $cognomeUtente) {
            $this->nomeUtente = $nomeUtente;
            $this->cognomeUtente = $cognomeUtente;
        }


        public function getNomeUtente() {
            return $this->nomeUtente;
        }

        public function setNomeUtente($nomeUtente) {
            if (!is_string($nomeUtente) && strlen($nomeUtente) <= 0) {
                return false;
            } else {
                return $this->nomeUtente = $nomeUtente;
            }
        }

        public function getCognomeUtente() {
            return $this->last_name;
        }

        public function setCognomeUtente($cognomeUtente) {
            if (!is_string($cognomeUtente) && strlen($cognomeUtente) <= 0) {
                return false;
            } else {
                return $this->cognomeUtente = $cognomeUtente;
            }
        }
    }

    $primoUtente = new Utente('Alice', 'Colombari');
    // var_dump($primoUtente);

?>