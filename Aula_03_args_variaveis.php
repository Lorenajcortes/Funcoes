
<?php
function soma($d, $e) 
{
    return $d + $e;
}

echo soma(18, 19) . "<br>";
echo soma(7, 8, 9) . "<br>";

echo "<br>";

function somaTodos(...$numeros) 
{
    $soma = 0;
    foreach($numeros as $numeros) 
    {
        $soma += $numeros;
    }
    return $soma;
}

echo somaTodos(6, 7, 8, 9, 10);

echo "<br>";

function geral($proficional, ...$defenssores) 
{
    echo "Profissional: $titular <br>";
    if($defenssores) 
    {
        foreach($defenssores as $dep) 
        {
            echo "Defenssores: $dep <br>";
        }
    }
}

echo "<br>";
geral("Policial", "Delegado", "Advogado", "Juiz");

echo '<br>';
geral("Lorena", "DeJesus");