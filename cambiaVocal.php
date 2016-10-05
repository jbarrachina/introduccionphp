<?php

/*
 * Programa que cambia.....
 */

include 'lib/utilidades.php';

$frase = $_POST['frase'];
$vocales = "aeiouplr";
for ($i=0;$i<strlen($vocales);$i++){
    echo sustituyeLetra($frase, $vocales[$i])."<br>";
}

