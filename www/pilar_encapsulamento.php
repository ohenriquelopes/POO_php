<?php


    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        /*
        public function getNome() {
            return $this->nome;
        }

        public function setNome($value) {

            if(strlen($value) >= 3) {
            $this->nome = $value;
            }
        }

        */
        /*

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }
        */

        private function executarMania() {
            echo 'Assobiar';
        }

        protected function responder() {
            echo 'Oi';
        }

        public function executarAcao() {
            $x = rand(1, 10);

            if($x >= 1 && $x<= 8) {
            $this->executarMania();
            } else {
            $this->responder();
            }
        }
    }


    class Filho extends Pai {
        public function getAtributo($attr) {
            return $this->$attr;
        }

        public function setAtributo($attr, $value) {
            $this->$attr = $value;
        }
    }

    //$pai = new Pai();
    //echo $pai->humor;
    //echo $pai->nome; essa linha da erro pois
    // o atributo esta como private ou protected
    //echo '<br />';
    //echo $pai->getNome(); // essa linha funciona pois
    // a funcao esta dentro do objeto e a funcao esta publica
    //$pai->humor = 'Triste';
    //echo '<br />';
    //$pai->setNome('Henrique');
    //echo $pai->getNome();
    //echo '<br />';
    //echo $pai->humor;
    //echo $pai->executarAcao();


    $filho = new Filho();

    echo '<pre>';
    print_r($filho);
    echo '</pre>';
    echo $filho->getAtributo('humor');
    $filho->setAtributo('humor', 'Triste');
    echo '<br />';
    echo $filho->getAtributo('humor');

?>