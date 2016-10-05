<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nota_numerica = $_POST['nota'];


if ($nota_numerica < 5) {
    echo "INSUFICIENTE";
} elseif ($nota_numerica < 6) {
    echo "SUFICIENTE";
} elseif ($nota_numerica < 7) {
    echo "BIEN";
} elseif ($nota_numerica < 9) {
    echo "NOTABLE";
} elseif ($nota_numerica < 10) {
    echo "SOBRESALIENTE";
} elseif ($nota_numerica == 10) {
    echo "MATRICULA DE HONOR";
} else {
    echo "anda ya";
}
