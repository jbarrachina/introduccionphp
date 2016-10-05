<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'utilidades.php';

$frase = $_POST['frase'];

$contadorDeVocales = 0;

for ($i=0;$i<strlen($frase);$i++){
    if (esVocal($frase[$i])) {
            $contadorDeVocales++;
    }
}

echo "el número de vocales es $contadorDeVocales";

