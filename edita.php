<?php

//conectarnos a la base datos
if (!$conexion = new mysqli("localhost", "root", "ausias", "neptuno")) {
    die("Error de conexión: " . $conexion->connect_error);
}
//ya tenemos acceso a la bd
$usuario = $conexion->real_escape_string($_POST['usuario']);
$password = $conexion->real_escape_string($_POST['password']);

//comprobar si el usuario existe
$sql = <<< SQL
   SELECT idCliente, codCliente, nombreCli, direccion, pass
     FROM cliente
     WHERE codCliente = '$usuario' AND pass=MD5('$password')    
SQL;

//echo $sql;
$validado = FALSE;
$resultado = new mysqli_result();

$resultado = $conexion->query($sql);
while ($fila = $resultado->fetch_array()) {
    $validado = TRUE;
    $nombreCliente = $fila['nombreCli'];
    $direccion = $fila['direccion'];
    $id = $fila['idCliente'];
}
$resultado->close();
if ($validado) {
    //si existe usuario entones crear 
    //formulario con sus datos
    ?>
<form action="guarda.php" method="post">
    nombre cliente: <input type="text" name="nombreCliente" value="<?php echo $nombreCliente;?>"><br>
    dirección: <input type="text" name="direccion" value="<?php echo $direccion;?>"><br>
    <input type="hidden" name="idCliente" value="<?php echo $id;?>">
    <input type="submit">
</form> 

    <?php
    echo "usuario validado";
} else {
    //echo "usuario o contraseña erróneas.";
    //vuelvo a mostrar el login y para ello no debo escribir nada
    header('location:login.html'); //pero no mostramos el error
}