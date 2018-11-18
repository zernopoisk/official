<?php

return [
    
    /**
     * Формы оплаты.
     */

    "forms"=>[

        "cash"=>[
            "alias"=>"cash",
            "name"=>"наличные",
            "translit"=>"nalichnyye",
        ],

        "noncash"=>[
            "alias"=>"noncash",
            "name"=>"безналичные",
            "translit"=>"beznalichnyye",
        ],

    ],

    /**
     * Способы оплаты.
     */

    "methods"=>[

        "prepayment"=>[
            "alias"=>"prepayment",
            "name"=>"предоплата",
            "translit"=>"predoplata",
            "available"=>"yes",
        ],

        "upon_shipment"=>[
            "alias"=>"upon_shipment",
            "name"=>"по факту отгрузки",
            "translit"=>"po_faktu_otgruzki",
            "available"=>"yes",
        ],

        "deferment_of_payment"=>[
            "alias"=>"deferment_of_payment",
            "name"=>"отсрочка платежа",
            "translit"=>"otsrochka_platezha",
            "available"=>"yes",
        ],

    ],

];
