
<?php
function meretissimo($nome = "Juiz(a)", $sobrenome = "Justiça") 
{
    return "Fique a vontade, $nome $sobrenome!<br>";
}

echo meretissimo();
echo meretissimo(null);
echo meretissimo(null, null);
echo meretissimo("juiz", "Justiça");

echo "<br>";

function cardapioDeHoje($tropero, $acompanhamento = "Vinho") 
{
    echo "Prato do dia: $Tropeirao <br>";
    echo "Bebida do dia: $vinhoTinto <br>";
}

pagarConta("tropeirao");
//anotarPedido("Pizza", "Refrigerante");

echo "<br>";

function pagarConta1($bebidaDeHoje = "suco", $salada) {
    echo "Prato do dia: $tropeirao <br>";
    echo "Bebida do dia: $vinhoTinto<br>";
}


pagarConta1("Suco2", "Salada2");