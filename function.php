<?php

  //criando uma função
  function soma(){

  	$num1 = 10;
    $num2 = 20;
   
    $resp = $num1 + $num2;
   echo  $resp ."<br />";
  }


//criando uma função com dois parâmetrod
function somar($num1,$num2){
   
    $resp = $num1 + $num2;
    echo $resp ."<br />";
    }

  soma();

  somar(20,30);


  function somarValores($num1,$num2){
  	return ($num1+$num2);
  }

echo "<br /> somando valores: ". somarValores(200,450);

  ?>