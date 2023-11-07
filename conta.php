<?php
    class conta
    {
        private $numero;
        private $agencia;
        private $proprietario;
        private $saldo;
        private $limite;
    
        public function __construct() {}

        public function create($_numero, $_agencia, $_proprietario, $_saldo, $_limite)
        {
            $this->nome = $_numero;
            $this->raca = $_agencia;
            $this->cor = $_proprietario;
            $this->peso = $_saldo;
            $this->idade = $_limite;
        }
        
        public function setnumero($numero) 
        {
            $this->numero = $numero;
        }

        public function setagencia($agencia) 
        {
            $this->agencia = $agencia;
        }

        public function setproprietario($proprietario) 
        {
            $this->proprietario = $proprietario;
        }

        public function setsaldo($saldo) 
        {
            $this->saldo = $saldo;
        }

        public function setlimite($limite) 
        {
            $this->limite = $limite;
        }       
    }
?>