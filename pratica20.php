<?php require_once('pratica14.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Editar Dados </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <?php 
    
    try {
       
        $sql = "SELECT * FROM aluno WHERE id_aluno = :id_aluno";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id_aluno', $id_aluno, PDO::PARAM_INT);

        $id_aluno = $_POST['id'];
        $stmt->execute();

        $dados = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($stmt->fetchAll() as $dados => $linha) {
            
            $id_aluno = $linha['id_aluno'];
            $nome = $linha['nome'];
            $email = $linha['email'];
            $telefone = $linha['telefone'];
            $data_nasc = $linha['data_nasc'];

        }

    } catch (PDOException $e) {
        
        echo $e->getMessage();
    }
    
    ?>

    <h2> Editar Dados </h2>

    <form action="pratica21.php" method="post" name="cad">

        <label> Nome: </label>
        <input type="hidden" name="id" id="id" value="<?php echo $id_aluno ?>"/>
        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" required/>
        <br/> <br/>
        <label> E-mail: </label>
        <input type="email" name="mail" id="mail" value="<?php echo $email ?>" required/>
        <br/> <br/>
        <label> Telefone: </label>
        <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" required/>
        <br/> <br/>
        <label> Data de Nascimento: </label>
        <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $data_nasc ?>" required/>
        <br/> <br/>
        <input type="submit" name="enviar" id="enviar" value="ENVIAR"/>

    </form>

    </body>
</html>