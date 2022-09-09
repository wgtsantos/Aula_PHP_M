<?php 

require_once('pratica14.php'); // arquivo de conexão com o banco de dados

try {

    $sql = "INSERT INTO aluno(nome, email, telefone, data_nasc) VALUES 
            ('Marcos Antonio', 'marcus@gmail.com', '(31) 34567890', '2002-05-01')";

    $conexao->exec($sql);

    echo "Dados gravados com sucesso!!";


} catch (Exception $e) {

    echo "Falha de conexao! Não foi possivel gravar os dados!!" . $e->getMessage();
}

$conexao = null;

?>