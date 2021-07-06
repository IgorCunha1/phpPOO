<?php


    class Titular
    {

        private string $nome;
        private string $cpf;

        public function __construct(string $nomeTitular, string $cpfTitular)
        {

            $this->cpf = $cpfTitular;
            $this->nome = $nomeTitular;
          /**  $this->nome = $this->validaNomeTitular($nomeTitular);*/

        }


            public function getNome(): string
            {
                return $this->nome;
            }

            public function setNome(string $nome): void
            {
                $this->nome = $nome;
            }

            public function getCpf(): string
            {
                return $this->cpf;
            }

            public function setCpf(string $cpf): void
            {
                $this->cpf = $cpf;
            }


           /**Metodos*/
            private function validaNomeTitular(String $nome):void
            {
                if (strlen($nome) < 5)
                {
                    echo "O Nome precisa ter mais de 5 caractere";
                    return;
                }
                $this->nome = $nome;

        }

}