<?php
function f1 () {
    echo "F1 está antes da exceção" . "<br>";
}

function f2 ($int) {
    if(!is_int($int)){
        throw new Exception("O argumento não é do tipo esperado");
    }else {
        echo "f2 está ativa" . "<br>";
    }

    f3();
}

function f3(){
    echo "f3 esta depois da exceção" . "<br>";
}

f1();
f2(
    int : 5.5
);




//Tratamento de exeções

function divisao($dividendo, $divisor){
    try{
        if($divisor == 0){
            throw new RangeException("O número não pode ser dividido por zero");
        }
        $resultado = $dividendo / $divisor;

        echo "O resultado é:" . $resultado;
    } catch (Exception $e){
        echo $e -> getMessage();
    }
    finally{
        echo "<br> Tratando exceções";
    }
}

divisao(10,0);

//php ^8.0
function divisao($dividendo, $divisor){
    try{
        if($divisor == 0){
            throw new RangeException("O número não pode ser dividido por zero");
        }
        $resultado = $dividendo / $divisor;
        echo "O resultado é:" . $resultado;
    } catch (Exception){
        echo "O número não pode ser dividido por 0";
    }
    finally{
        echo "<br> Tratando exceções";
    }
}

divisao(10,0);
?>