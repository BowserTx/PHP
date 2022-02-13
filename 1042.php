<?php

$ordenar = [$a, $b, $c];

$linha = explode(' ', readline());

$a = $linha[0];
$b = $linha[1];
$c = $linha[2];

sort($ordenar);

echo $ordenar;


?>