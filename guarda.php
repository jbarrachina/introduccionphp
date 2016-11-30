<?php

//conectarnos a la base datos
if (!$conexion = new mysqli("localhost", "root", "ausias", "neptuno")) {
    die("Error de conexión: " . $conexion->connect_error);
}

//conexion hecha
$nombreCliente = $conexion->real_escape_string($_POST['nombreCliente']); 
$direccion = $conexion->real_escape_string($_POST['direccion']);
$idCliente = $conexion->real_escape_string($_POST['idCliente']);

$sql = <<< SQL
    UPDATE cliente
      SET nombreCli = '$nombreCliente',
          direccion = '$direccion'
      WHERE idCliente = $idCliente      
SQL;

if ($conexion->query($sql)){
    echo 'Actualización realizada';
}
else 
{
    echo 'Error al guardar los datos';
}


