<?php 

    $nome = $_POST['nome'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    $imc = round($peso / ($altura ** 2), 2);

    $resultados = [
        "18.5" => "Abaixo do peso",
        "24.9" => "Peso normal",
        "29.9" => "Sobrepeso",
        "34.9" => "Obesidade grau 1",
        "39.9" => "Obesidade grau 2",
        "40.0" => "Obesidade grau 3"
    ];
    
    foreach($resultados as $calc => $msg){

        if((float) $calc < 40.0){
            if($imc <= (float) $calc){
                echo "Prezado(a) $nome, o resultado do seu IMC é $imc - $msg";
                break;
            }
        }else{ 
            echo "Prezado(a) $nome, o resultado do seu IMC é $imc - $msg";
        }
    }

?>