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
            $this->numero = $_numero;
            $this->agencia = $_agencia;
            $this->proptietario = $_proprietario;
            $this->saldo = $_saldo;
            $this->limite = $_limite;
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
    
        public function depositar()
        {
            echo "$this->nome recebe um valor e acrescenta no saldo;";
     
            public function sacar()
            {
             echo $this->nome == $-numero ? "$this->nome   recebe um valor e se a soma do saldo com limite for superior a 0 confirme o saque, reduzindo o valor do saldo pelo valor informado." : 
                                               
            }
     
        }
    }
?>