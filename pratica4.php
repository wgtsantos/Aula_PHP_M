<?php 
    // funções 

    function frase(){

        echo "Está é uma frase detntro de uma função";

    }

    frase();

    echo "<br/>";

    // Função com Argumentos

    function textos($nome, $idade) {
        
        echo "<h3> Meu nome é $nome e tenho $idade anos de idade.";

    }

    textos('Alexandre', 18);

    echo "<br/>";

    function calc($a, $b) {

        return $a + $b;

    }

    echo "O resultado é " . calc(4, 5);

?>