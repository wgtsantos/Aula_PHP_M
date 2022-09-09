<?php 

 // Arrays

//$carros = array('Onix', 'Punto', 'Gol', 'Fusca', 'Opala', 'Palio');
$carros = ['Onix', 'Punto', 'Gol', 'Fusca', 'Opala', 'Palio'];

    // echo $carros[3];

    $qtd = count($carros);

    echo "<ul>";

    for ($i = 0; $i < $qtd; $i++) { 
        
        echo "<li> $carros[$i] </li>";

    }
    
    echo "</ul>";

?>