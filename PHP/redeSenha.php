<?php
include_once "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];
$confirma = $_POST['confirma'];

function campoVazio(){

}

function SenhaDiferente(){

}

function DeuCerto( $email, $senha, $conexao){

}

if(empty($email || $senha  || $confirma) ){

    echo campoVazio();
    exit();

}elseif ( $senha <> $confirma ){ 

    echo SenhaDiferente();
    exit();

}else{

    echo DeuCerto($email , $senha , $conexao);
    exit();
}
?>