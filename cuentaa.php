<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$frase = $_POST['frase'];

$totalaes = 0;

for($i=0;$i< strlen($frase);$i++){
    if ($frase[$i]=='a'){
        $totalaes++;
    }
}
echo "el total de a(es) es: $totalaes";


