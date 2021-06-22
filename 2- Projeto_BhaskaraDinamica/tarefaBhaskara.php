<?php

echo "<pre>";
var_dump($_GET);

$a = $_GET["Entrada1"];
$b = $_GET["Entrada2"];
$c = $_GET["Entrada3"]; 

if($a > 0 || $a < 0){
    function delta($a, $b, $c){
        $delta = (pow($b, 2)) -4 * $a *$c;
        return $delta;
    };
    $delta = delta($_GET["Entrada1"], $_GET["Entrada2"], $_GET["Entrada3"]);
    
    function x1($a, $b, $delta){
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        return $x1;
    };
    
    function x2($a, $b, $delta){
        $raiz2 = (-$b - sqrt($delta)) / (2 * $a);
        return $raiz2;
    };
    
    $resultados = array();
    $resultados["delta"] = delta($_GET["Entrada1"], $_GET["Entrada2"], $_GET["Entrada3"]);
    $resultados["x1"] = x1($_GET["Entrada1"], $_GET["Entrada2"], $delta);
    $resultados["x2"] = x2($_GET["Entrada1"], $_GET["Entrada2"], $delta);
    
    echo "<pre>";
    var_dump($resultados);
    
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    echo "Versão organizada desse código:";
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    if($delta == 0){
        echo "Seus parametros são A = $a, B = $b e C = $c";
        echo "<br>";
        echo "Seu delta é $delta, então sua conta possuí apenas uma raíz. ";
        echo "<br>";
        echo "X = " . $resultados["x1"];
    }
    
    else if($delta >= 0){
        echo "Seus parametros são A = $a, B = $b e C = $c";
        echo "<br>";
        echo "Seu delta é $delta, então sua conta possuirá duas raízes reais. ";
        echo "<br>";
        echo "X1 = " . $resultados["x1"];
        echo "<br>";
        echo "X2 = " . $resultados["x2"];
    }
    
    else {
        echo "Seus parametros são A = $a, B = $b e C = $c";
        echo "<br>";
        echo "Seu delta é $delta, então sua conta não possuirá raízes reais.";
    }
}

else{
    echo "<br>";
    echo "<br>";
    echo "Para calcularmos sua conta, A deve ser diferente de 0.";
}

?>