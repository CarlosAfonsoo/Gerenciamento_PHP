<?php
include_once "conexao.php";

$id = $_POST['id'];
$lblCliente = $_POST['lblCliente'];

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Cliente</th>";
echo "<th>Funcionario</th>";
echo "<th>valor</th>";
echo "<th>descrição do serviço</th>";
echo "</tr>";

$sql = "SELECT * FROM tbrela 
WHERE id = '$id'  AND  nomeCliente = '$lblCliente' ";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {

    while ($registro = mysqli_fetch_array($resultado)) {
        $id = $registro['id'];
        $nomeCliente = $registro['nomeCliente'];
        $nomeFunc = $registro['nomeFunc'];
        $valor = $registro['Valor'];
        $Descri = $registro['Descri'];

        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $nomeCliente . "</td>";
        echo "<td>" . $nomeFunc . "</td>";
        echo "<td>" . $valor . "</td>";
        echo "<td>" . $Descri . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>Nenhum registro encontrado.</td></tr>";
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);

echo "</table>";