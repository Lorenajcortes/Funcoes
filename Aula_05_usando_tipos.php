
<?php
function somar2($c, $d) 
{

    return $c + $d;
}

echo somar2(3, 5) . "<br>";
echo somar2(3.8, 6.4) . "<br>";

echo "<br>";

function somar3(int $c, int $d)
{
    return $c + $d;
}

echo somar3(2, 4) . "<br>";
echo somar3(3.8, 4.4) . "<br>";

echo "<br>";

