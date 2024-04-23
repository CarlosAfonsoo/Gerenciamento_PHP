<?php

    include_once "conexao.php";

    $nomeCli = $_POST['lblCli'];
    $nomeProf = $_POST['lblprof'];
    $value = $_POST['value'];
    $desc = $_POST['desc'];

    function envioDAdos($nomeCli, $nomeProf, $value, $desc, $conexao){

        $sql = "INSERT INTO `tbrela`( `nomeCliente`, `nomeFunc`, `Valor`, `Descri` ) VALUES ('$nomeCli','$nomeProf','$value','$desc')";

        $result = mysqli_query($conexao, $sql);

        mysqli_close($conexao);

        return header('location: ../html-css/home.html');

    }

    envioDAdos($nomeCli, $nomeProf, $value, $desc, $conexao)
?>