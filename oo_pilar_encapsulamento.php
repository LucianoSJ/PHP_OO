<?php
    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        // public function getNome(){
        //     return $this->nome;
        // }

        // public function setNome($valor) {
        //     if(strlen($valor) >= 3) { // Verifica se não é vazio
        //         $this->nome = $valor;
        //     } 
        // }

        // public function getsobrenome(){
        //     return $this->sobrenome;
        // }

        // public function setsobrenome($valor) {
        //     if(strlen($valor) >= 3) { // Verifica se não é vazio
        //         $this->sobrenome = $valor;
        //     } 
        // }

// Métodos mágicos
        // public function __get($attr) {
        //     return $this->$attr;
        // }

        // public function __set($attr, $valor) {
        //     $this->$attr = $valor;
         
        // }

        private function executarMaria() {
           echo 'Assobiar';
        }

        protected function responder() {
            echo 'Oi';
         }

         public function executarAcao() {
            $x = rand(1, 10);

            if ($x >=1 && $x <=8) {
                $this->executarMaria();
            } else {
                $this->responder();
            }
         }
 }

 class Filho extends Pai { // Só herda atributos e métodos public e protected (private não são herdados)
    public function getAtributo($attr) {
        return $this->$attr;
    }

    public function setAtributo($attr, $value){
        $this->$attr = $value;
    }
 }

    $pai = new Pai();
    // echo $pai->humor;
    // $pai->humor = 'Triste';
    // echo '<br />';
    // echo $pai->humor;
    // echo '<hr />';

    // echo $pai->nome; // Dá erro não pode ser acessado diretamente.
   // echo $pai->sobrenome; // Dá erro não pode ser acessado diretamente.

//    echo $pai->getNome();
//    $pai->setNome('Luciano');
//    echo '<br />';
//    echo $pai->getNome();

//    $pai->setNome('');
//    echo '<br />';
//    echo $pai->getNome();

//    echo '<br />';
//    echo '<hr />';

//    echo $pai->getsobrenome();
//    $pai->setsobrenome('Santos');
//    echo '<br />';
//    echo $pai->getsobrenome();

//    $pai->setsobrenome('');
//    echo '<br />';
//    echo $pai->getsobrenome();

//  echo $pai->nome;
//  echo '<br />';
//  echo $pai->sobrenome;
//  echo '<hr />';
//  echo $pai->executarAcao();

$filho = new Filho();

echo '<pre>';
print_r($filho);
echo '</pre>';
echo $filho->getAtributo('humor');
echo '<br />';
echo $filho->getAtributo('sobrenome');

echo '<hr />';
$filho->setAtributo('humor', 'Triste');
echo '<br />';
echo $filho->getAtributo('humor');
?>