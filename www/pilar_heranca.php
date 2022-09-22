<?php

    //class Carro { //padrao sem heranca
    class Carro extends Veiculo { // aplicando heranca
        //public $placa = 'ABC1234';
        //public $cor = 'Branco';
        public $teto_solar = true;

        //function acelerar() {
        //    echo 'Acelerar';
        //}

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

    // class Moto { // sem heranca
    class Moto extends Veiculo { // aplicando heranca
        //public $placa = 'DEF1122';
        //public $cor = 'Preta';
        public $contraPesoGuidao = true;

        //function acelerar() {
        //    echo 'Acelerar';
        //}

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
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

        function freiar() {
            echo 'Freiar';
        }
    }


    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1234', 'Preta');

    echo '<pre>';
    print_r($carro);
    echo '<br /><br />';
    print_r($moto);
    echo '</pre>';
    echo '<hr />';

    $carro->abrirTetoSolar();
    echo '<br />';
    $carro->acelerar();
    $carro->freiar();
    echo '<br />';
    echo '<br />';

    $moto->empinar();
    echo '<br />';
    $moto->acelerar();
    $carro->freiar();

?>