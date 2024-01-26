<?php

//Declaração de função com dois parametros
function calcular($dim1, $dim2) {
    //calculo
    $total = $dim1 + $dim2;
    //retorna resultado
    return $total;
}

// Chame a função e armazene o resultado nos parametros
$resultado = calcular(2, 2);

// Exiba o resultado da função
echo $resultado;
?>
