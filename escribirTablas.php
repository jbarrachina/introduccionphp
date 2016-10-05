<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function escribirUnaTabla($numero) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = ", $i * $numero, "<br>\n";
    }
}


//El programa empieza aquí
echo '<table>';

echo '<tr>';
for ($i = 1; $i <= 10; $i++) {
    echo '<td>';
    escribirUnaTabla($i);
    echo '</td>';
    if ($i % 2 == 0) {
        echo '</tr><tr>';
    }
}
echo '</tr>';
echo '</table>';

