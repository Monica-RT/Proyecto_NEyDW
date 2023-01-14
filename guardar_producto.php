<?php
 ?>
<?php
if (!isset($_POST["raza"]) || !isset($_POST["precio"]) || !isset($_POST["descripcion"])) {
    exit("Faltan datos");
}
include_once "funciones.php";
guardarProducto($_POST["raza"], $_POST["precio"], $_POST["descripcion"]);
header("Location: productos.php");
