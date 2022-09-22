<?php

    class Carro extends Veiculo { // aplicando heranca

        public $teto_solar = true;


        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posicao volante';
        }
    }

    class Moto extends Veiculo { // aplicando heranca

        public $contraPesoGuidao = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar() {
            echo 'Empinar';
        }

        function trocarMarcha() { // ele vai sobrepor o da classe pai
            echo 'Desengatar embreagem com a mao, e engatar com o pe';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }

        function freiar() {
            echo 'Freiar';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com o pe, e engatar com a mao';
        }
    }

    class Caminhao extends Veiculo {}


    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1234', 'Preta');
    $caminhao = new Caminhao();

    $carro->trocarMarcha();
    echo '<br />';
    $moto->trocarMarcha();
    echo '<br />';
    $caminhao->trocarMarcha();


?>