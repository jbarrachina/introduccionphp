<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

list($a1, $a2, $a3) = explode("/", $_POST['numeros']);

if ($a1 <= $a2) {
    if ($a1 <= $a3){ //$a1 es el menor
        if ($a2 <= $a3){
            echo $a1, "<=", $a2, "<=",$a3;
        } else {
            echo $a1, "<=", $a3, "<=",$a2;
        }
    } else { // $a3 < $a1 <= $a2
        echo $a3, "<=", $a1, "<=",$a2;
    }   
} else { // $a2 < $a1
    if ($a1 <= $a3){  //$a2 < $a1 <= $a3
        echo $a2, "<=", $a1, "<=",$a3;
    } else { //$a2 < $a1 y $a3 < $a1 => $a1 es el mayor
        if ($a2 <= $a3) {
            echo $a2, "<=", $a3, "<=",$a1;
        } else {
            echo $a3, "<=", $a2, "<=",$a1;
        }      
    }   
}
