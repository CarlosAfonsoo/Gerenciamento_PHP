<?php
include_once "conexao.php";

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Cargo</th>";
echo "<th>CPF</th>";
echo "<th>Telefone</th>";
echo "</tr>";

$sql = "SELECT * FROM tbfun";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {

    while ($registro = mysqli_fetch_array($resultado)) {
        $id = $registro['id'];
        $nome = $registro['Nome'];
        $Cargo = $registro['Cargo'];
        $CPF = $registro['CPF'];
        $Tel = $registro['Tel'];

        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $Cargo . "</td>";
        echo "<td>" . $CPF . "</td>";
        echo "<td>" . $Tel . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>Nenhum registro encontrado.</td></tr>";
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);

echo "</table>";