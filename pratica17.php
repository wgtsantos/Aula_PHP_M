<?php 

require_once('pratica14.php');

try {
    
    $sql = "INSERT INTO aluno(nome, email, telefone, data_nasc) VALUES 
            (:nome, :email, :telefone, :data_nasc)";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $stmt->bindParam(':data_nasc', $data_nasc, PDO::PARAM_STR);

    $nome = verificar($_POST['nome']);
    $email = verificar($_POST['mail']);
    $telefone = verificar($_POST['telefone']);
    $data_nasc = verificar($_POST['data_nasc']);

    $stmt->execute();

    echo "Dados Gravados com Sucesso!!"; 
    echo "<a href='pratica16.html'> Voltar ao Formulário </a>";

} catch (PDOException $e) {
    
    echo "ERROR!! Não foi Possível gravar os dados!! " . $e->getMessage();

}

$conexao = null;

function verificar($dados) {
    $dados = trim($dados);
    $dados = stripcslashes($dados);
    $dados = htmlspecialchars($dados);

    return $dados;
}

?>