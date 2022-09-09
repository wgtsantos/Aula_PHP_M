<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomebd = "pratica13";

try {

    $conexao = new PDO("mysql:host=$servidor; dbname=$nomebd", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "A conexão foi estabelecida com sucesso!!";

} catch (Exception $e) {
   
    echo "Falha na conexão com a base de dados " . $e->getMessage();

}

?>