<?php

include_once "conexao.php";

$Email = $_POST['email'];
$senha = $_POST['senha'];
$Confirma = $_POST['senhaConfirma'];

function vazio() {
    return header('location: ../html-css/criarConta.html');
}

function senhaDesigul() {
    return header('location: ../html-css/criarConta.html');
}

function deuCerto($Email, $senha, $conexao) {

    // Verificação de usuário para saber se já não é cadastrado

    $sql_check = "SELECT 2 FROM `tblogin` WHERE `email` = '$Email' AND `senha` = '$senha'";

    $result_check = mysqli_query($conexao, $sql_check);

    if (mysqli_num_rows($result_check) == 0) {

        // Verificação de Email

        $sql_check = "SELECT 1 FROM `tblogin` WHERE `email` = '$Email'";

        $result_check = mysqli_query($conexao, $sql_check);

        if (mysqli_num_rows($result_check) == 0) {

            //Vai inserir dados no banco de dados

            $sql = "INSERT INTO `tblogin` (`email`, `senha`)
                    VALUES ('$Email', '$senha')";
    
            $resultado = mysqli_query($conexao, $sql);
    
            mysqli_close($conexao);
    
            return header('location: ../html-css/index.html');

        } else {

            return header('location: ../html-css/criarConta.html');
            //return "Email já cadastrado";

        }
    } else {

        return header('location: ../html-css/criarConta.html');
        //return "Usuário já cadastrado";

    }
}

if (empty($Email) && empty($senha) && empty($Confirma)) {

    // Campos vazios
    echo vazio();
    exit();

} elseif ($senha <> $Confirma) {

    // Senhas diferentes
    echo senhaDesigul();
    exit();

} else {
    // consulta no banco e inserção de dados 
    echo deuCerto($Email, $senha, $conexao);
    exit();
}

?>
