<?php

    class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estatico';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1() {
            echo 'Eu sou um metodo estatico';
        }

        public function metodo2() {
            echo 'Eu sou um metodo normal';
        }
    }

    //$x = new Exemplo();
    Exemplo::$atributo1; // atributos estaticos nao precisam iniciar a instancia (new)
    echo '<br />';
    Exemplo::metodo1();


    /*
    public static $atributo1
    NAO ESTA ACESSIVEL ATRAVES DO OPERADOR

    public static function metodo1
    NAO PODE UTILIZAR O $this
    */



?>