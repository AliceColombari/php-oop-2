<?php
    // E-COMMERCE PAGINA INIZIALE - HOME PAGE
    class Prodotto {

        // VARIABILI - ATTRIBUTI CLASSI
        public $nomeProdotto;
        public $codice;
        public $prezzo;
        public $quantita;
        public $marca;
        public $descrizione;
        public $tipoAnimale;

        // FUNZIONE CONSTRUCTOR, RICHIESTA DELLE DET. PROPRIETA INSERITE
        public function __construct($nomeProdotto, $codice, $prezzo, $quantita, $marca, $descrizione, $tipoAnimale) {
            $this->setNome($nomeProdotto);
            $this->setCodice($codice);
            $this->setPrezzo($prezzo);
            $this->setQuantita($quantita);
            $this->setMarca($marca);
            $this->setDescrizione($descrizione);
            $this->setTipoAnimale($tipoAnimale);
        }

        // FUNZIONE PER NOME
        public function getNome() {
            return $this->nomeProdotto;
        }

        public function setNome($nomeProdotto) {
            if (is_numeric($nomeProdotto) && $nomeProdotto <= 0) {
                return false; 
            } else {
                return 'Nome prodotto: ' . $this->nomeProdotto = $nomeProdotto;
            }
        }

        // FUNZIONE PER CODICE PRODOTTO
        public function getCodice() {
            return 'Codice prodotto: ' . $this->codice;
        }

        public function setCodice($codice) {
            if (!is_numeric($codice) && $codice <= 0) {
                return false;
            } else {
                return $this->codice = $codice;
            }
        }

        // FUNZIONE PER PREZZO PRODOTTO
        public function getPrezzo($valuta) {
            return $valuta . round($this->prezzo, 2);
        }

        public function setPrezzo($prezzo) {
            if (!is_numeric($prezzo) && $prezzo <= 0) {
                return false;
            } else {
                return $this->prezzo = $prezzo . ' €';
            }
        }

        // FUNZIONE PER QUANTITA PRODOTTO
        public function getQuantita() {
            return $this->quantita;
        }

        public function setQuantita($quantita) {
            if (!is_numeric($quantita) && $quantita <= 0) {
                return false;
            } else {
                return $this->quantita = $quantita . ' Kg';
            }
        }

        // FUNZIONE PER MARCA PRODOTTO
        public function getMarca() {
            return $this->marca;
        }

        public function setMarca($marca) {
            if (is_numeric($marca) && $marca <= 0) {
                return false;
            } else {
                return $this->marca = $marca;
            }
        }

        // FUNZIONE PER DESCRIZIONE PRODOTTO
        public function getDescrizione() {
            return $this->descrizione;
        }

        public function setDescrizione($descrizione) {
            if (is_numeric($descrizione) && $descrizione <= 0) {
                return false;
            } else {
                return $this->descrizione = $descrizione;
            }
        }

        // FUNZIONE PER TIPOLOGIA ANIMALE PER QUEL PRODOTTO
        public function getTipoAnimale() {
            return $this->tipoAnimale;
        }

        public function setTipoAnimale($tipoAnimale) {
            if (is_numeric($tipoAnimale) && $tipoAnimale <= 0) {
                return false;
            } else {
                return $this->tipoAnimale = 'Prodotto per ' . $tipoAnimale;
            }
        }
    }

    // CREAZIONE DI UNA ISTANZA PER PRODOTTO
    $primoProdotto = new Prodotto ('Royal Canin Maxi', '47795', 30, 4, 'Royal Canin', 'Alimento secco completo per cani adulti di grande taglia.', 'cani');

    // STAMPA DEL PRODOTTO
    // var_dump($primoProdotto);