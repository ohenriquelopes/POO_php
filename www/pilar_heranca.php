<?php

    class Carro {
        public $placa = 'ABC1234';
        public $cor = 'Branco';
        public $teto_solar = true;

        function acelerar() {
            echo 'Acelerar';
        }

        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posicao volante';
        }
    }

    class Moto {
        public $placa = 'DEF1122';
        public $cor = 'Preta';
        public $contraPesoGuidao = true;

        function acelerar() {
            echo 'Acelerar';
        }

        function empinar() {
            echo 'Empinar';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }
    }


    $carro = new Carro();
    $moto = new Moto();

?>