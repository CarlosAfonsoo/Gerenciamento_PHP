<?php

    include_once "conexao.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    function campoVazio() {

        return "Campos Vazios";

        //return header( 'location: ../html-css/index.html' );
    }

    function deuCerto( $email , $senha , $conexao) {
        
        $sql_check = "SELECT 2 FROM `tblogin` WHERE `email` = '$email' && `senha` = '$senha' ";
        $result_check = mysqli_query( $conexao, $sql_check );
    
        if ( mysqli_num_rows( $result_check ) > 0 ) {
            //return "Usuario logado";
        return header('location: ../html-css/home.html');
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