<?php
/* 5. Faça um programa em PHP que leia a altura, a idade e o sexo de 50 pessoas e forneça as seguintes informações:
- A maior altura e a menor altura;
- A média de altura de mulheres;
- A idade do homem mais velho e da mulher mais nova.*/

$maioraltura = 0;
$menoraltura = 3.4;
$somaalturamuie = 0;
$totalmuies = 0;
$totalmachos= 0;
$maisveio = 0;
$maisnova = 200;

// randoms para substituir inputs
function sexo_random() {
    return (rand(0, 1) === 0) ? 'M' : 'F'; // random de 50% dos 2 itens ser sorteado
}


function altura_random() {
    return rand(150, 250) / 100; // "/100" Converte para metros
}


function idade_random() {
    return rand(18, 80);
}

// funções do codigo
function define_maior_altura($altura, $maioraltura) {
    if ($altura > $maioraltura){
        $maioraltura = $altura;
    }
    return ($maioraltura);
}


function define_menor_altura($altura, $menoraltura) {
    if ($altura < $menoraltura){
        $menoraltura = $altura;
    }
    return ($menoraltura);
}


function calcula_media_altura_muie($somaalturamuie, $totalmuies) {
    $mediaAlturaMulheres = $somaalturamuie / $totalmuies;
    return ($mediaAlturaMulheres);
}


function define_homem_mais_veio($idade, $maisveio) {
    if ($idade > $maisveio){
        $maisveio = $idade;
    }
    return ($maisveio);
}


function define_mulher_mais_nova($idade, $maisnova) {
    if ($idade < $maisnova){
        $maisnova = $idade;
    }
    return ($maisnova);
}

// estrutura de repetição para gerar 50 randoms
$cont = 0;
echo "<b>Dados recebidos: </b>";
while ($cont < 50) {
    $cont++;
    $altura = altura_random();
    $idade = idade_random();
    $sexo = sexo_random();

    echo "<br> Pessoa". $cont.":  "; 
    echo " //    Altura =" .$altura;
    echo " //    Idade =".$idade; 
    echo " //    Sexo =" .$sexo ;

   // aplicações das funções e das especificações do poblema 
    $maioraltura = define_maior_altura($altura, $maioraltura);
    $menoraltura = define_menor_altura($altura, $menoraltura);

    // atualizando informações específicas para mulheres
    if ($sexo === 'F') {
        $somaalturamuie += $altura; // adicionando total de altura para media
        $totalmuies++; // contador de mulheres
        $maisnova = define_mulher_mais_nova($idade, $maisnova);
    }

    // e para homens
    if ($sexo === 'M') {
        $totalmachos++. // contador de homens
        $maisveio = define_homem_mais_veio($idade, $maisveio);
    }
}

// média de altura das muie
$mediaAlturaMulheres = calcula_media_altura_muie($somaalturamuie, $totalmuies);

// entregando resultado final
echo "<br><br> <b>Especificando parametros: </b>";
echo "<br> Maior altura: " . $maioraltura . "metros <br>";
echo "Menor altura: " . $menoraltura . "metros <br>";
echo "Média de altura das mulheres: " . round($mediaAlturaMulheres, 2) . "metros <br>";
echo "Idade do homem mais velho: " . $maisveio  . " anos <br>"; 
echo "Idade da mulher mais nova: " . $maisnova  . " anos <br>";
echo "Total de mulheres: " . $totalmuies  . "<br>";
echo "Total de homens: " . $totalmachos  . "<br>";
?>
