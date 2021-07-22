<?php
    require("DevuelveProductos.php");
    
    $productos = new DevuelveProductos();

    $array_productos=$productos->get_productos();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos php POO</title>
</head>
<body>

    <?php 
        foreach($array_productos as $elemento) {
            echo "<table><tr><td>";
            echo $elemento['idproductos'] . "</td><td>";
            echo $elemento['productosNom'] . "</td><td></tr></table>";
        }
    
    ?>
    
</body>
</html>