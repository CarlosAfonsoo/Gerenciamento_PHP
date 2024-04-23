<?php

include_once "conexao.php";

$id = $_POST['id'];
$lblCliente = $_POST['lblCliente'];

function consulta($id, $lblCliente, $conexao){

    $sql = "SELECT * FROM   'tbrela'
    WHERE $id = 'id' AND $lblCliente = 'nomeCliente' ";

    $resultado = mysqli_query($conexao, $sql);

}
consulta($id, $lblCliente, $conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>


    </body>
</html>