<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Función que toma un número entero positivo, n >=0, y
 * devuelve un array con los n primeros números de la
 * serie de Fibonacci
 */

include "Fibonacci.php";

function fibonacci($num){
    $fibo = [];
    if($num>0){
        $fibo[]=0;
        $a1 = 0;
    }
    if($num>1){
        $fibo[]=1;
        $a2 = 1;
    }
    for($i=3;$i<=$num;$i++){
        $nuevo = $a1+$a2;
        $fibo[]=$nuevo;
        $a1 = $a2;
        $a2 = $nuevo;
    }
    return $fibo;
}

$f = fibonacci(30);

foreach (fibonacci(10) as $elemento){
    echo $elemento,"-";
}

echo "<br>";
for($i=0;$i<count($f);$i++){
    echo $f[$i],"-";
}
echo "<br>";

$serie = new Fibonacci(40);

foreach ($serie->getSerie() as $elemento){
    echo $elemento,"-";
}

echo "<br>";

echo "Elemento 20 es ",$serie->getElemento(20)," " ,$serie->getLimite(),"<br>";
echo $serie->inSerie(50)? "está " : "no está ";
echo $serie->inSerie(150)? "está " : "no está ";
echo $serie->inSerie(4181)?  "está " :  "no está ";
echo $serie->inSerie(121393)? "está " :  "no está ";

echo "<br>";
   
echo "El número aureo es: ",$serie->getAureo();

