<?php

    include_once "conexao.php";

    $nome = $_POST['name'];
    $fun = $_POST['fun'];
    $value = $_POST['value'];
    $desc = $_POST['desc'];

    function envioDados( $nome, $fun, $value, $desc, $conexao ) {

        $sql = "INSERT INTO `tbrela`(`nomeCliente`, `nomeFunc`, `Valor`, `Descri`) VALUES ('$nome','$fun','$value','$desc')";

        $resultado = mysqli_query($conexao, $sql);

        mysqli_close( $conexao );

        return header('location: ../html-css/home.html');
    }

    envioDados($nome, $fun, $value, $desc, $conexao);    
    ?>