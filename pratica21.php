<?php 

require_once('pratica14.php');

try {
    
    $sql = "UPDATE aluno SET nome = :nome, email = :email, telefone = :telefone, 
    data_nasc = :data_nasc WHERE id_aluno = :id_aluno";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':id_aluno', $id_aluno, PDO::PARAM_INT);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $stmt->bindParam(':data_nasc', $data_nasc, PDO::PARAM_STR);

    $id_aluno = verificar($_POST['id']);
    $nome = verificar($_POST['nome']);
    $email = verificar($_POST['mail']);
    $telefone = verificar($_POST['telefone']);
    $data_nasc = verificar($_POST['data_nasc']);

    $stmt->execute();

    echo "<script>
                alert('Dados Alterados com Sucesso!');
                location.href = 'pratica18.php';
         </script>";

} catch (PDOException $e) {
    
    echo "ERROR!! Não foi Possível alterar os dados!! " . $e->getMessage();

}

$conexao = null;

function verificar($dados) {
    $dados = trim($dados);
    $dados = stripcslashes($dados);
    $dados = htmlspecialchars($dados);

    return $dados;
}

?>