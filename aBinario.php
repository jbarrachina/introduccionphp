<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero = $_POST['decimal'];

$binario = "";
while ($numero > 0){
    echo "$numero :";
    $resto = $numero % 2;
    $binario=$resto.$binario;
    $numero = intdiv($numero,2);
    echo " $resto : $binario <br>";
}
echo "en binario es: $binario";

