<?php
include_once "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];
$confirma = $_POST['confirma'];

function campoVazio() {
    return "Campos Vazios";
    //return header('location: ../html-css/criarConta.html');
}

function SenhaDiferente() {
    return "Senha Diferente";
    //return header('location: ../html-css/criarConta.html');
}

function DeuCerto($email, $senha, $conexao) {
    $sql_check = "SELECT 2 FROM `tbcliente` WHERE `Cli_Email` = '$email' && `Cli_Senha` = '$senha' ";
    $result_check = mysqli_query($conexao, $sql_check);

    if (mysqli_num_rows($result_check) == 0) {

        $sql = "UPDATE `tbcliente` 
                SET  `Cli_Senha` = '$senha'
                WHERE `Cli_Senha` <> '$senha' && `Cli_Email` = '$email' ";

        $resultado = mysqli_query($conexao, $sql);
        mysqli_close($conexao);

        //return "Dados alterados com sucesso!";
        return header('location: ../html-css/index.html');
        
    } else {
        return "Dados Corretos";
    }
}

if (empty($email && $senha && $confirma)) {

    echo campoVazio();
    exit();
} elseif ($senha <> $confirma) {

    echo SenhaDiferente();
    exit();
} else {

    echo DeuCerto($email, $senha, $conexao);
    exit();
}
?>
