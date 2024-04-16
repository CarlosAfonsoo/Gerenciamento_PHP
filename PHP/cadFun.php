<?php

    include_once "conexao.php";

    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $CPF = $_POST['CPF'];
    $tel = $_POST['tel'];

    function envioDAdos($nome, $cargo, $CPF, $tel, $conexao){

        $sql = "INSERT INTO `tbserv`( `nomeCli`, `nomeProf`, `value`, `desc` ) VALUES ('$nome','$cargo','$CPF','$tel')";

        $result = mysqli_query($conexao, $sql);

        mysqli_close($conexao);


    }

    envioDAdos($nome, $cargo, $CPF, $tel, $conexao)
?>