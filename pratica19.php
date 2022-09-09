<?php 

require_once('pratica14.php');

try {
    
    $sql = "DELETE FROM aluno WHERE id_aluno = :id_aluno";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam('id_aluno', $id_aluno);

    $id_aluno = $_POST['id'];

    $stmt->execute();

    echo "<script>
                alert('Dados Excluidos com Sucesso!');
                location.href = 'pratica18.php';
         </script>";


} catch (PDOException $e) {
  
    echo "<script>
            alert('Erro ao tentar excluir os dados!'". $e->getMessage() ."');
            location.href = 'pratica18.php';
         </script>";

}

$conexao = null;

?>