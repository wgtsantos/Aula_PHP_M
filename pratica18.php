<script>
    function deletar() {
        ok = confirm("Tem certeza que deseja deletar este dado!??");
        if(ok){
            return true;
        } else {
            return false;
        }
    }
</script>

<?php 

require_once('pratica14.php');

try {

    $sql = "SELECT * from aluno";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    $dados = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "<table border='1' width='800'>
            <tr bgcolor='lightblue'>
            <th> ID </th>
            <th> Nome </th>
            <th> E-mail </th>
            <th> Telefone </th>
            <th> Data de Nascimento </th>
            <th colspan='2'> Ação </th>
            </tr>";

    foreach ($stmt->fetchAll() as $dados => $linha) {
        
        echo "<tr>";
        echo "<td>". $linha['id_aluno'] . "</td>";
        echo "<td>". $linha['nome'] . "</td>";
        echo "<td>". $linha['email'] . "</td>";
        echo "<td>". $linha['telefone'] . "</td>";
        echo "<td>". $linha['data_nasc'] . "</td>";

        echo "<td> 
                <form action='pratica19.php' method='post'>
                <input type='hidden' id='id' name='id' value='". $linha['id_aluno'] . "'/>
                <input type='submit' id='excluir' name='excluir' value='EXCLUIR' onclick='return deletar()'/>
                </form>
            </td>";
        echo "<td> 
                <form action='pratica20.php' method='post'>
                <input type='hidden' id='id' name='id' value='". $linha['id_aluno'] . "'/>
                <input type='submit' id='editar' name='editar' value='EDITAR'/>
                </form>
            </td>";

        echo "<tr>";
    }
    
    echo "</table>";
  
} catch (PDOException $e) {
    
    echo "Falha ao listar os dados!! " . $e->getMessage();

}

$conexao = null;


?>