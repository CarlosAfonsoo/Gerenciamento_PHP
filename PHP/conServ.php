<?php
include_once "conexao.php";

$id = $_POST['id'];
$nomeCliente = $_POST['cliente'];

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome do Cliente</th>";
echo "<th>Profissional Responsavel</th>";
echo "<th>Valor</th>";
echo "<th>Descrição do Serviço</th>";
echo "</tr>";

$sql = "SELECT * FROM tbserv 
WHERE id = '$id'  AND  nomeCli = '$nomeCliente' ";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {

    while ($registro = mysqli_fetch_array($resultado)) {
        $id = $registro['id'];
        $nomeCli = $registro['nomeCli'];
        $nomeProef = $registro['nomeProf'];
        $value = $registro['value'];
        $desc = $registro['desc'];

        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $nomeCli . "</td>";
        echo "<td>" . $nomeProef . "</td>";
        echo "<td>" . $value . "</td>";
        echo "<td>" . $desc . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>Nenhum registro encontrado.</td></tr>";
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);

echo "</table>";