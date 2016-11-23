<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$conexion = new mysqli("localhost", "root", "ausias", "neptuno");
if ($conexion->connect_errno) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = $conexion->real_escape_string($_POST['usuario']);
$pass = $conexion->real_escape_string($_POST['password']);

//conexión establecida
$sql = <<<SQL
    SELECT idCliente
        FROM cliente
        WHERE idCliente='$usuario' AND password='$pass'    
SQL;

echo $sql, "<br>";

$resultado = new mysqli_result(); //opcional

$valido = FALSE;
if ($resultado = $conexion->query($sql)) {
    while ($fila = $resultado->fetch_array()) {
        $valido = TRUE;
    }
}
if ($valido) {
    echo "usuario validado ";
} else {
    echo "error de validacion ";
}



