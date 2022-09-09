<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomebd = "pratica13";

$conexao = new mysqli($servidor, $usuario, $senha, $nomebd);

if($conexao->connect_error) {

    echo "Falha na conexão!! " . $conexao->connect_error;
}else {

    echo "Conexao com banco de dados estabelecida com sucesso!!";
}

?>