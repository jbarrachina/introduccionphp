<html>
    <head>
        <title>Listado de Clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
<?php

include "conexion.php";

$idPedido = $_GET['idPedido'];

$sql = <<< SQL
    select producto.nombreProd as nombreProd, cantidad, detalle_pedido.precioE as precioE
        from detalle_pedido
        left join producto ON producto.idProducto=detalle_pedido.idProducto
        where idPedido=? 
SQL;
//echo $sql;
$sentencia = new mysqli_stmt(); //es opcional
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("i", $idPedido);

if (!$sentencia){
    die("Error al preparar: ");
}
//ya está preparada
$sentencia->execute();
if ($sentencia->errno){
    die("Error al ejecutar: ".$sentencia->error);
}
//ejecutada con éxito
$sentencia->bind_result($nombrePro, $cantidad, $precioE);
$i=1;
while ($sentencia->fetch()){
    //en $id, $cod, ... estan los valores de los campos
    ?>
        <div class="row <?php echo $i%2==0 ? 'bg-warning':'';?> ">
             <div class="col-md-4">
                <?php echo $nombrePro;?>
            </div>
            <div class="col-md-1">
                    <?php echo $cantidad; ?>
            </div>
             <div class="col-md-2">
                <?php echo $precioE;?>
            </div>
        </div>
    <?php
    $i++;
}

$sentencia->close();
$conexion->close();   

?>
        </div>
    </body>
</html>



