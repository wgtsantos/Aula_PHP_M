<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Pratica 11 - Validação de Campos </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>"
    method="post" name="cad">

    <label> Nome: </label>
    <input type="text" id="nome" name="nome"/>
    <br/> <br/>
    <label> E-mail: </label>
    <input type="email" id="mail" name="mail"/>
    <br/> <br/>
    <label> Telefone: </label>
    <input type="tel" id="telefone" name="telefone"/>
    <br/> <br/>
    <input type="submit" id="enviar" name="enviar" value="ENVIAR"/>
    </form>

    </body>

    <?php 

    $nome = $email = $telefone = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = verificar($_POST['nome']);
    $email = verificar($_POST['mail']);
    $telefone = verificar($_POST['telefone']);

    echo "<br/> <br/>";

    echo "<strong>Nome</strong>: " . $nome . "<br/>";
    echo "<strong>E-mail:</strong> " . $email . "<br/>";
    echo "<strong>Telefone:</strong> " . $telefone . "<br/>";

    }

    function verificar($dados) {
          $dados = trim($dados);
          $dados = stripcslashes($dados);
          $dados = htmlspecialchars($dados);

        return $dados;
    }

    ?>

</html>