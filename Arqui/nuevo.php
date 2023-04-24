<?php

if(!isset($_POST["codigo"]) || !isset($_POST["descripcion"]) || !isset($_POST["precioVenta"]) || !isset($_POST["precioCompra"]) || !isset($_POST["existencia"])) exit();

include_once "base_de_datos.php";
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$precioVenta = $_POST["precioVenta"];
$precioCompra = $_POST["precioCompra"];
$existencia = $_POST["existencia"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(codigo, descripcion, precioVenta, precioCompra, existencia) VALUES (?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$codigo, $descripcion, $precioVenta, $precioCompra, $existencia]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
