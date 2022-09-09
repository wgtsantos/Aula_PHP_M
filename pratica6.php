<?php 

// Arrays Associados 

$usuarios = [
            "Artur"=>"21", "Eduarda"=>"18", "Joao P"=>"20", "Vitor"=>"30",
            "Luiz"=>"19", "Layene"=>"15", "Maíra"=>"14", "Rogério"=>"40"
            ];

    // echo $usuarios["Artur"];

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th> Nome </th>";
    echo "<th> Idade </th>";
    echo "</tr>";

    foreach ($usuarios as $nome => $idade) {
        
        echo "<tr>";
        echo "<td> $nome </td> <td> $idade </td>";
        echo "</tr>";
        
    }

    echo "</table>";

?>