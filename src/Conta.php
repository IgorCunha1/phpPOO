<?php

    class Conta
    {

        private String $cpfTitular;
        private String $nomeTitular;
        private int $saldo;


        public function __construct(String $cpf,String $nome)
        {

            $this->cpfTitular = $cpf;
            $this->validaNomeTitular($nome);
            $this->saldo = 0;
        }


        private function validaNomeTitular(String $nome):void
        {
            if (strlen($nome)<5){
                echo "O Nome precisa ter mais de 5 caractere";
                return;
            }

            $this->nomeTitular = $nome;


        }

        /**
         * @return mixed
         */
        public function getCpfTitular(): String
        {
            return $this->cpfTitular;
        }

        /**
         * @param mixed $cpfTitular
         */
        public function setCpfTitular($cpfTitular): void
        {
            $this->cpfTitular = $cpfTitular;
        }

        /**
         * @return mixed
         */
        public function getNomeTitular() : String
        {
            return $this->nomeTitular;
        }

        /**
         * @param mixed $nomeTitular
         */
        public function setNomeTitular($nomeTitular): void
        {
            $this->nomeTitular = $nomeTitular;
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
    }