<?php
echo "<pre>";
var_dump($_GET);

$valor1 = $_GET["Entrada1"];
$valor2 = $_GET["Entrada2"];

function calc($valor){
    if($valor % 2 == 0){
        echo "$valor é par <br>";   
    }
    else{
        echo "$valor é impar <br>";
    }
}

function tudo($valor1, $valor2){
    for($i = $valor1; $i <= $valor2; $i++) {
        $construido[] = rand();
    }
    foreach($construido as $key => $value){
        calc($value);
    }
}

$retorno = tudo($valor1, $valor2);
echo $retorno;








?>