<?php
$resp=3; 
$n1=3;
$n2=5;
$resultado=0;


echo("Escolha o número referente a operação que vc quer efetuar com os dois números: $n1  e  $n2 <br>");
echo("1- Soma         <br>      *3* Multiplicação <- <br>
      2- Subtração    <br>         4- Divisão <br>" );

function soma ($n1, $n2){
    return ($resultado= $n1 + $n2);
}
function subtraçao ($n1, $n2){
    return ($resultado= $n1 - $n2);
}
function multiplicacao ($n1, $n2){
    return ($resultado= $n1 * $n2);
}
function divisao ($n1, $n2){
    return ($resultado= $n1 / $n2);
}


      if ($resp=1) {  
        echo("Resultado: ");
         echo soma($n1, $n2);
    } 
    elseif ($resp=2 ) {
        echo("Resultado: ");
        echo subtraçao($n1, $n2);
    } elseif ($resp=3 ) {
        echo("Resultado: ");
        echo multiplicacao($n1, $n2);
    }
    elseif ($resp=4 ) {
        echo("Resultado: ");
        echo divisao($n1, $n2);
    }









?>