<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define(NUMERO,9);

$numero = $_POST['numero'];
$divisor = $_POST['divisor'];


if ($numero % $divisor == 0) {
    //múltiplo de divisor
    echo "el $numero es multiplo de $divisor. Bien!!!";
} else {
    echo "el $numero no es multiplo de $divisor, el resto vale: " . $numero % $divisor;
}

