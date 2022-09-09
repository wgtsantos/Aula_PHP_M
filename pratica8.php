<?php 

    $nome = $_POST['nome'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $total = $num1 + $num2;

    echo "Prezado(a), $nome, a soma dos dois números é igual a: $total";

?>