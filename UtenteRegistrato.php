<?php
    class UtenteRegistrato {

        public $email;
        public $password;
        public $indirizzo;
        public $cartaDiCredito;

        public function __construct($email, $password, $indirizzo, $cartaDiCredito) {
            $this->email = $email;
            $this->password = $password;
            $this->indirizzo = $indirizzo;
            $this->cartaDiCredito = $cartaDiCredito;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
            return $this;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setPassword($password) {
            $this->password = $password;
            return $this;
        }

        public function getIndirizzo() {
            return $this->addresses;
        }

        public function setIndirizzo($indirizzo) {
            $this->indirizzo = $indirizzo;
            return $this;
        }

        public function getcartaDiCredito() {
            return $this->cartaDiCredito;
        }

        public function setcartaDiCredito($cartaDiCredito) {
            $this->cartaDiCredito = $cartaDiCredito;
            return $this;
        }
    }

    $UtenteRegistrato = new UtenteRegistrato('colombari@gmail.com', '****', 'A. Gagliardi, 17', 'Mastercard');
    // var_dump($UtenteRegistrato);