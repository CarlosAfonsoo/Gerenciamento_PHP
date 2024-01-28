<?php

    include_once "conexao.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    function campoVazio() {

        return "Campos Vazios";

        //return header( 'location: ../html-css/index.html' );
    }

    function deuCerto( $email , $senha , $conexao) {
        
        $sql_check = "SELECT 2 FROM `tbcliente` WHERE `Cli_Email` = '$email' && `Cli_Senha` = '$senha' ";
        $result_check = mysqli_query( $conexao, $sql_check );
    
        if ( mysqli_num_rows( $result_check ) > 0 ) {
            return "Usuario logado";
    }else{
        return "Usuario não cadastrado";
    }
}

    if(empty($email && $senha)){

        echo campoVazio();
        exit();

    }else{
        echo deuCerto($email, $senha , $conexao);
        exit();
    }
?>