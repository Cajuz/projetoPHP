<?php
$inicio= 'Você';
$expressao= 2;

echo 'Em uma situação hipotética, você tem que passar pro outro lado da avendida.<br/>
Escolha uma das opções abaixo:<br/> ';

echo '<br/> Opção 1-  Esperou o farol fechar. <br/>';
echo ' Opção 2-  Saiu correndo sem olhar pros lados. <br/>';
echo ' Opção 3- Colocou a mão na frente e disse "Ele n é doido ta me vendo". <br/>';
echo ' Opção 4-  Deu um mortal duplo e foi pro outro lado. <br/>';

echo '<br/>Você escolheu a  opção(nº):';

switch($expressao){
    case 1:
        echo  " 1 <br/>($inicio passou pro outro lado!)";
        break;
     case 2:
        echo " 2 <br/>($inicio morreu esmagado por um CAMINHÂO!)" ;
        break;
     case 3:
        echo " 3 <br/>($inicio foi atropelado...)";
        break;
     case 4:
        echo " 4 <br/>($inicio passou pro outro lado!)" ;
        break;

        

}







?>