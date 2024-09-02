<?php
$resp=3, $n1=3, $n2=5, $resultado=0;



function calculadora ($n1, $n2){

echo("Escolha o número referente a operação que vc quer efetuar com os dois números: ", $n1 "e ", $n2);
echo("1- Soma               *3* Multiplicação \n
      2- Subtração          4- Divisão");

      if ($resp=1) {
        $resultado= $n1 + $n2;
    } elseif ($resp=2 ) {
        $resultado= $n1 - $n2;
    } elseif ($resp=3 ) {
        $resultado= $n1 * $n2;
    }
    elseif ($resp=4 ) {
        $resultado= $n1 / $n2;
    }

return ($resultado);

};





?>