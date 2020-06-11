<?php
// SDK de Mercado Pago
require 'vendor/autoload.php';

class PagosMP
{
    public $producto = '';
    public $url_imagen = '';
    public $precio = 0;
    public $external_reference = '';

    public function getLinkPago(){

        MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
        MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

        $payer = new MercadoPago\Payer();
        $payer->name = "Lalo";
        $payer->surname = "Landa";
        $payer->email = "test_user_63274575@testuser.com";
        $payer->date_created = "2020-06-12T12:58:41.425-04:00";
        $payer->phone = array(
          "area_code" => "11",
          "number" => "22223333"
        );
        $payer->identification = array(
          "type" => "DNI",
          "number" => "12345678"
        );
        $payer->address = array(
          "street_name" => "False",
          "street_number" => 123,
          "zip_code" => "1111"
        );


        $item = new MercadoPago\Item();
        $item->id = "1234";
        $item->title = $this->producto;
        $item->description = "Dispositivo móvil de Tiendae - commerce";
        $item->picture_url = $this->url_imagen;
        $item->quantity = 1;
        $item->unit_price = $this->precio;


        $preference = new MercadoPago\Preference();

        $preference->back_urls = array(
            "success" => "https://".$_SERVER['SERVER_NAME']."/mp_success.php",
            "failure" => "https://".$_SERVER['SERVER_NAME']."/mp_failure.php",
            "pending" => "https://".$_SERVER['SERVER_NAME']."/mp_pending.php"
        );
        $preference->auto_return = "approved";
        $preference->payment_methods = array (
            "excluded_payment_methods" => array ("id" => "amex"),
            "excluded_payment_types" => array ("id" => "atm"),
            "installments" => 6
        );

        $preference->items = array($item);
        $preference->payer = $payer;
        $preference->external_reference = $this->external_reference;
        $preference->save();

        return $preference->init_point;

    }



}

?>