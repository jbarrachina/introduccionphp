<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$matriz_bruto = $_POST['matriz'];
$matriz_por_filas = explode("|", $matriz_bruto);
$filas = count($matriz_por_filas);
print_r($matriz_por_filas);
echo "</br>";
for ($i=0;$i<$filas;$i++){
    $matriz[$i]= explode(":", $matriz_por_filas[$i]);
    $columnas = count($matriz[$i]);
}
print_r($matriz);
echo "</br>";
//escribimos
for ($i=0;$i<$filas;$i++){
    for ($j=0;$j<$columnas;$j++){
        printf("%5d", $matriz[$i][$j]);
    }
    echo "</br>";
}

//transponemos

for ($j=0;$j<$columnas;$j++){
    for ($i=0;$i<$filas;$i++){
        printf("%5d", $matriz[$i][$j]);
    }
    echo "</br>";
}

