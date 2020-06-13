<?php
session_start();
/*
http_response_code(200);

    MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

    $merchant_order = null;

    switch($_GET["topic"]) {
        case "payment":
            $payment = MercadoPago\Payment::find_by_id($_GET["id"]);
            $merchant_order = MercadoPago\MerchantOrder::find_by_id($payment->order->id);
            break;
        case "merchant_order":
            $merchant_order = MercadoPago\MerchantOrder::find_by_id($_GET["id"]);
            break;
    }

    $paid_amount = 0;
    foreach ($merchant_order->payments as $payment) {
        if ($payment['status'] == 'approved'){
            $paid_amount += $payment['transaction_amount'];
        }
    }

    if($paid_amount >= $merchant_order->total_amount){
        if (count($merchant_order->shipments)>0) {
            if($merchant_order->shipments[0]->status == "ready_to_ship") {
                print_r("Pago completo. Imprime la etiqueta y env&iacute;a el art&iacute;culo.");
            }
        } else { // The merchant_order don't has any shipments
            print_r("Pago completo. Entrega el art&iacute;culo");
        }
    } else {
        print_r("Pago aun no concretado. No entregues el art&iacute;culo.");
    }

*/
    //ini_set( 'display_errors', 1 );
    //error_reporting( E_ALL );
    $from = "tomasjuarez@gmail.com";
    $to = "tomasjuarez@gmail.com";
    $subject = "MP Ecommerce Notification";
    $message = "Probando envio de email";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);



?>