<?php
    class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1() {
            echo 'Eu sou um método estático';
        }

        
        public static function metodo2() {
            echo 'Eu sou um método normal';
        }
    }

    //$exemplo = new Exemplo();
    echo Exemplo::$atributo1;  //Atributos e métodos static podem ser acessado testa forma
    echo '<br />';
    Exemplo::metodo1();
    echo '<br />';
    // echo Exemplo::$atributo2;  // Não funciona
    Exemplo::metodo2(); // Aceita mas não é o ideal (pode ser descontinuada)
?>