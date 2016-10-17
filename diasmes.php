<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

list($mes, $anyo) = split("/", $_POST['fecha']);


switch ($mes){
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12: echo '31';
        break;
    case 4:
    case 6:
    case 9:
    case 11: echo '30';
        break;
    case 2:
        $dias = 28;
        if ($anyo % 400 == 0){  }
    default: "número de mes erróneo";
        
}


