
<?php
function mostrarConteudo() 
{
    echo "comecando conteudo! <br>";
    echo " PHP para iniciantes!<br>";
}

mostrarMensagens();
mostrarMensagens();
mostrarMensagens();

echo "<br>";

$variavel = 2;

function trocaValor() 
{
    $variavel = 3;
    echo "Durante a inicializacao: $variavel <br>";
}

echo "Comeco: $variavel <br>";
trocaValor();
echo "final: $variavel <br>";

echo "<br>";

function trocaValorDeVez() 
{
    global $variavel;
    $variave2 = 4;
    echo "Durante a inicializacao: $variavel <br>";
}

echo "Comeco: $variavel <br>";
trocaValorDeVez();
echo "Final: $variavel <br>";