<?php

return [

    /**
     * Статусы объявления.
     */

    "pending"=>[
        "alias"=>"pending",
        "name"=>"в ожидании",
        "translit"=>"v_ozhidanii",
        "sense"=>"ожидает модерации: добавл. ключевых слов для SEO, проверка оплаты, обзвон заказчика и др.",
        "available"=>"yes",
    ],

    "published"=>[
        "alias"=>"published",
        "name"=>"опубликовано",
        "translit"=>"opublikovano",
        "sense"=>"опубликовано и учавствует в поиске.",
        "available"=>"yes",
    ],

    "archived"=>[
        "alias"=>"archived",
        "name"=>"архивировано",
        "translit"=>"arkhivirovano",
        "sense"=>"деактивировано, не учавствует в поиске, 301-Redirect на страницу `Related Offers`.",
        "available"=>"yes",
    ],

];
