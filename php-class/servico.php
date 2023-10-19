<?php
    class Servico {
        /** Valor do serviço oferecido
         * @var float
         */
        public float $valor;
        
        /** Qualidade do atendimento do serviço
         * @var string
         */
        public string $qualidade;

        /** Gorjeta que deve ser paga para o atendente
         * @var float
         */
        protected float $gorjeta;

        /** Valor que o cliente tem que pagar junto a gorjeta 
         * @var float
        */
        protected float $valorTotal;
        

        function __construct(float $valor, string $qualidade)
        {
            $this->valor = $valor;
            $this->qualidade = $qualidade;
            $this->calcularGorjeta();
        }

        private function calcularGorjeta() {
            $this->gorjeta = $this->valor * ($this->qualidade / 100);
            $this->valorTotal = $this->valor + $this->gorjeta;
        }


        public function getGorjeta(){
            return $this->gorjeta;
        }

        public function getValorTotal() {
            return $this->valorTotal;
        }

        public function getValor() {
            return $this->valor;
        }
    }