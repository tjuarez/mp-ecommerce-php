<?php
session_start();
include 'clase_carrito.php';

$carro = new Carrito;
$carro->empresa = $_SESSION['empresa'];
$carro->id_carrito = $_SESSION["id_carrito"];
$carro->medio_de_pago = 'MERCADOPAGO';
$carro->estado_del_pago = 'PENDIENTE';
if(isset($_SESSION["ids_vouchers_web"])){
    $carro->ids_vouchers_web = implode(':', $_SESSION["ids_vouchers_web"]);
}

$res = $carro->cerrarCarrito();

unset($_SESSION['cantidad_items_carrito']);
unset($_SESSION['id_carrito']);
unset($_SESSION['external_reference']);
unset($_SESSION['importe_total']);

unset($_SESSION['ids_vouchers_web']);
unset($_SESSION['importe_total_voucher']);
unset($_SESSION['vouchers']);
unset($_SESSION['voucher_id']);
unset($_SESSION['voucher_desc']);
unset($_SESSION['voucher_costo']);
unset($_SESSION['voucher_valor']);
unset($_SESSION['indice_array_voucher']);

header("Location: index.php?mp_status=PENDING");
?>