<?php

use Veiculo as GlobalVeiculo;

    class Carro extends Veiculo {
        // public $placa = 'ABC1234';
        // public $COR = 'Braco';
        public $teto_solar = true;

        function __construct ($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        // function acelerar(){
        //     echo 'Acelerar';
        // }

        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posicao volante';
        }
    }

    class Moto extends Veiculo {
        // public $placa = 'DEF1122';
        // public $cor = 'Preta';
        public $contraPesoGuidao = true;

        function __construct ($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        // function acelerar() {
        //     echo 'Acelerar';
        // }

        function empinar() {
            echo 'Empinar';
        }

 // Polimorfismo ***********************************************************
        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e enagatar marcha com o pé';
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
            echo 'Desengatar embreagem com o pé e enagatar marcha com a mão';
        }
    }

    class Caminhao extends Veiculo {}

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Preta');
    $caminhao = new Caminhao();

    $carro->trocarMarcha();
    echo '<br/ >';
    $moto->trocarMarcha();
    echo '<br/ >';
    $caminhao->trocarMarcha();

;?>