<?php
    define ('Host','localhost');
    define ('Senha','');
    define ('Name','root');
    define ('BD','bdgere');

    $conexao = new mysqli ('Name','Senha', 'Host', 'BD' );
    
    echo "deu Certo"
?>