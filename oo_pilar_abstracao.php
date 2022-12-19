<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters setters (overloading / sobrecarga)

        function  __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

       /*  function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function getNome() {
            return $this->nome;
        }


        function getNumFilhos() {
            return $this->numFilhos;
        } */

        //métodos
        function resumirCadFunc(){
            /* this, operador de ajuste de contexto */
            return "$this->nome possui $this->numFilhos filhos(s) o seu telefone é  $this->telefone / Cargo:  $this->cargo  / Salário:  $this->salario";
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
            //numFilhos: variavel do objeto que pertence a class
            //$numFilhos: variavel do método recebido por parametro
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('telefone', '(11)97458-985');
    $y->__set('numFilhos', 2);
    $y->__set('cargo', 'Axiliar de Expedição');
    $y->__set('salario', 'R$ 1780,52');
    // echo $y->resumirCadFunc();
    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) o seu telefone é ' . $y->__get('telefone') . ' / Cargo: ' . $y->__get('cargo') . '  / Salário: '. $y->__get('salario');

    echo '<br />';
    $x = new Funcionario();
    $y->__set('nome', 'Maria');
    $y->__set('telefone', '(11)974875-3698');
    $y->__set('numFilhos', 0);
    // echo $y->resumirCadFunc();
    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) o seu telefone é ' . $y->__get('telefone');
  
?>