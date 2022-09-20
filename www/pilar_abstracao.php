<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = 'Jose';
        public $telefone = '11 99999-8888';
        public $numFilhos = 2;


        //metodos
        function resumirCadFunc() {
            //$this é um operador de ajuste de contexto
            // se eu quiser recuperar um atributo do OBJ em questao $this->(atributo do obj)
            return "$this->nome possui $this->numFilhos filhos";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            // atravez do operador $this->numFilho (recuperar o atributo numFilhos)
            $this->numFilhos = $numFilhos;
        }
    }

    // variavel $y que recebe uma instancia da classe funcionario
    // criando um objeto com base na classe Funcionario() eatribuindo esse OBJ a $y 
    // Isso significa que apartir da $y eu tenho acesso aos atributos e metodos do OBJ
    $y = new Funcionario();
    // Para acessar atributos ou metodos usar -> e na sequencia chamar o atributo ou o metodo
    echo $y->resumirCadFunc();
    echo '<br />';
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();
    echo '<hr />';

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo '<br />';
    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc();
?>