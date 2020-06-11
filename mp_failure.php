<?php
session_start();
include 'clase_carrito.php';

$carro = new Carrito;
$carro->empresa = $_SESSION['empresa'];
$carro->id_carrito = $_SESSION["id_carrito"];
$carro->medio_de_pago = 'MERCADOPAGO';
$carro->estado_del_pago = 'RECHAZADO';

$res = $carro->cerrarCarrito();

/*unset($_SESSION['cantidad_items_carrito']);
unset($_SESSION['id_carrito']);
unset($_SESSION['external_reference']);
unset($_SESSION['importe_total']);*/

//$_SESSION['from_mp_status'] = 'FAILURE';
header("Location: index.php?mp_status=FAILURE");
?>