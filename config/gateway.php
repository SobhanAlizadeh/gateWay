<?php
use App\ap;$ap=ap::query()->first();
use App\irankish;$irankish=irankish::query()->first();
use App\mellat;$mellat=mellat::query()->first();
use App\parsian;$parsian=parsian::query()->first();
use App\pasargad;$pasargad=pasargad::query()->first();
use App\payir;$payir=payir::query()->first();
use App\PayPal;$PayPal=PayPal::query()->first();
use App\sadad;$sadad=sadad::query()->first();
use App\saman;$saman=saman::query()->first();
use App\zarinpal;$zarinPal=zarinpal::query()->first();

return [

    //-------------------------------
    // Timezone for insert dates in database
    // If you want Gateway not set timezone, just leave it empty
    //--------------------------------
    'timezone' => 'Asia/Tehran',

    //--------------------------------
    // Zarinpal gateway
    //--------------------------------
    'zarinpal' => [
        'merchant-id'  => $zarinPal->merchant_id,
        'type'         => $zarinPal->type,             // Types: [zarin-gate || normal]
        'callback-url' => $zarinPal->callbackUrl,
        'server'       => $zarinPal->server,                // Servers: [germany || iran || test]
        'email'        => $zarinPal->email,
        'mobile'       => $zarinPal->mobile,
        'description'  => $zarinPal->description,
    ],

    //--------------------------------
    // Mellat gateway
    //--------------------------------
    'mellat' => [
        'username'     => $mellat->username,
        'password'     => $mellat->password,
        'terminalId'   =>$mellat->terminalId,
        'callback-url' => $mellat->callbackUrl
    ],

    //--------------------------------
    // Saman gateway
    //--------------------------------
    'saman' => [
        'merchant'     => $saman->merchant,
        'password'     =>  $saman->password,
        'callback-url'   => $saman->callbackUrl,
    ],

    //--------------------------------
    // PayIr gateway
    //--------------------------------
    'payir'    => [
        'api'          => $payir->api,
        'callback-url' => $payir->callbackUrl
    ],

    //--------------------------------
    // IranKish gateway
    //--------------------------------
    'irankish' => [
        'merchantId' => $irankish->merchantId,
        'sha1key' => $irankish->merchantId->sha1key,
        'callback-url' => $irankish->callbackUrl
    ],

    //--------------------------------
    // Sadad gateway
    //--------------------------------
    'sadad' => [
        'merchant'      => $sadad->merchant,
        'transactionKey'=> $sadad->transactionKey,
        'terminalId'    => $sadad->terminalId,
        'callback-url'  => $sadad->callbackUrl
    ],

    //--------------------------------
    // Parsian gateway
    //--------------------------------
    'parsian' => [
        'pin'          => $parsian->pin,
        'callback-url' => $parsian->callbackUrl
    ],
    //--------------------------------
    // Pasargad gateway
    //--------------------------------
    'pasargad' => [
        'terminalId'    => $pasargad->terminalId,
        'merchantId'    => $pasargad->merchantId,
        'certificate-path'    => storage_path($pasargad->certificatePath),
        'callback-url' => $pasargad->callbackUrl
    ],

    //--------------------------------
    // Asan Pardakht gateway
    //--------------------------------
    'asanpardakht' => [
        'merchantId'     => $ap->merchantId,
        'merchantConfigId'     => $ap->merchantId,
        'username' => $ap->merchantId,
        'password' => $ap->merchantId,
        'key' => $ap->key,
        'iv' => $ap->iv,
        'callback-url'   => $ap->callbackUrl,
    ],

    //--------------------------------
    // Paypal gateway
    //--------------------------------
    'paypal'   => [
        // Default product name that appear on paypal payment items
        'default_product_name' => $PayPal->default_product_name,
        'default_shipment_price' => $PayPal->default_shipment_price,
        // set your paypal credential
        'client_id' => $PayPal->client_id,
        'secret'    =>$PayPal->secret,
        'settings'  => [
            'mode'                   => $PayPal->mode, //'sandbox' or 'live'
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled'         => true,
            'log.FileName'           => storage_path() . '/logs/paypal.log',
            /**
             * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
             *
             * Logging is most verbose in the 'FINE' level and decreases as you
             * proceed towards ERROR
             */
            'call_back_url'          => '/gateway/callback/paypal',
            'log.LogLevel'           => 'FINE'

        ]
    ],
    //-------------------------------
    // Tables names
    //--------------------------------
    'table'    => 'gateway_transactions',
];
