<?php
//for
$arr = [0,3,5,1];

$qtd_elementos_array = count($arr); 


for ($i=0; $i< $qtd_elementos_array -1; $i++) {
    for ($PosicaoAtual=0; $PosicaoAtual<$qtd_elementos_array -$i -1; $PosicaoAtual++) {

        $ProximaPosicao = $PosicaoAtual+1; 

        if ($arr[$ProximaPosicao] < $arr[$PosicaoAtual]) {

            $auxiliar = $arr[$PosicaoAtual]; 
            $arr[$PosicaoAtual] = $arr[$ProximaPosicao] ;
            $arr[$ProximaPosicao] = $auxiliar;
        }
    }
}
print_r($arr) . "\n";

//switch
$sorteio = rand(2,2);

echo "Valor sorteado: " . $sorteio;
switch($sorteio){
   case 1:
   case 2:
         echo " => Você perdeu 1 ponto";
         break;
   case 3:
         echo " => Você ganhou um bônus! parabéns ganhou 3 pontos";
         break;
   default:
         echo " => Jogue novamente";
         break;
}

//forEach

$arr = [1,2,3,4,5,6,7,8,9,10];

$qtd_elementos_array = count($arr); 

foreach ($arr as $indice => $value) {

    if ($value % 2 == 0){
        continue;
    }
    echo "valor do índice : ". $indice . " valor : " . $value . "\n";
}
?>