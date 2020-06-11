<?php
session_start();

$collection_id=$_GET["collection_id"];
$external_reference=$_GET["external_reference"];
$payment_type=$_GET["payment_type"];
$preference_id=$_GET["preference_id"];
$site_id=$_GET["site_id"];
$processing_mode=$_GET["processing_mode"];
$merchant_account_id=$_GET["merchant_account_id"];

echo 'collection_id: ' . $collection_id . '<br />';
echo 'external_reference: ' . $external_reference . '<br />';
echo 'payment_type: ' . $payment_type . '<br />';
echo 'preference_id: ' . $preference_id . '<br />';
echo 'site_id: ' . $site_id . '<br />';
echo 'processing_mode: ' . $processing_mode . '<br />';
echo 'merchant_account_id: ' . $merchant_account_id . '<br />';

?>
<br /><br />
<span>El pago fue exitoso!</span><br />
<a href="index.php">Volver a la Tienda</a>