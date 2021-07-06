<?php

require_once 'src/Titular.php';

    class Conta
    {

        private int $saldo;
        private $titular;
        private static int $numeroDeContas = 0;


        public function __construct(Titular $titular)
        {

            $this->titular = $titular;
            $this->saldo = 0;

            Conta::$numeroDeContas++;

        }





        /**
         * @return int
         */
        public function getSaldo(): int
        {
            return $this->saldo;
        }

       /** Metodos */

        public function sacar(float $valor):void
        {
            if($this->saldo < $valor){
                echo ('Saldo Insuficiente');
                return;
            }

            $this->saldo -= $valor;

        }

        public function depositar(float $valor):void
        {
            if($valor <= 0){
                echo "Impossivel depositar valores negativos <br>";
                return;
            }

            $this->saldo += $valor;
        }

        public function transferir(float $valor, Conta $conta):void
        {
            if($this->saldo <= $valor){
                echo "Você não tem saldo suficiente.";
                return;
            }
            $conta->saldo += $valor;

        }

            public static function getNumeroDeContas() : int
        {
                return Conta::$numeroDeContas;
        }
    }