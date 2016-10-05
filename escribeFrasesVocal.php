<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// versión feten

include 'lib/utilidades.php';

$frase = $_POST['frase'];
//contar vocales


for ($i = 0; $i < strlen($frase); $i++) {
    if (esVocal($frase[$i])) {
        echo "$i <-|-> $frase <br>\n";
    }
}




