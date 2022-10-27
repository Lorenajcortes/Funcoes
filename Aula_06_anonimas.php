
<?php

$soma = function ($d, $e) 
{
    return $d + $e;
};

echo $soma(4, 8) . "<br>";


echo "<br>";


function executar($d, $e, $op, $funcao) 
{
    $resultado = $funcao($d, $e);
    echo "$d $op $e = $resultado <br>";
}

executar(4, 8, '-', $soma);


echo "<br>";


$subtracao = function($d, $e) 
{
    return $d * $e;
};

executar(4, 8, '*', $subtracao);

