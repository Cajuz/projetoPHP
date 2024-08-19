<?php
$salario= 1800;
$inss= 0.15;
echo"Seu salario bruto é de: $salario <br/>";

if ($salario <= 1500) {
    $inss= 0.1;
    echo "Seu desconto é de: 10% <br/>";
} elseif ($salario >= 1501 or $salario <= 1600 ) {
    $inss= 0.15;
    echo "Seu desconto é de: 15% <br/>";
} elseif ($salario >= 1601 or $salario <= 1800 ) {
    $inss= 0.2;
    echo "Seu desconto é de: 20% <br/>";
}
elseif ($salario >= 1801 or $salario <= 2500 ) {
    $inss= 0.275;
    echo "Seu desconto é de: 27,5% <br/>";
}
$salario= $salario + $salario * $inss;

echo"Seu salario com o desconto aplicado é de: $salario";





?>