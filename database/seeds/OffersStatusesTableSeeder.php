<?php

use Illuminate\Database\Seeder;
use App\OfferStatus;

class OffersStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\OfferStatus::create(["alias"=>"pending","name"=>"в ожидании","translit"=>"v_ozhidanii","sense"=>"ожидает модерации: добавл. ключевых слов для SEO, проверка оплаты, обзвон заказчика и др.","available"=>"yes"]);
        App\OfferStatus::create(["alias"=>"published","name"=>"опубликовано","translit"=>"opublikovano","sense"=>"опубликовано и учавствует в поиске.","available"=>"yes"]);
        App\OfferStatus::create(["alias"=>"archived","name"=>"архивировано","translit"=>"arkhivirovano","sense"=>"деактивировано, не учавствует в поиске, 301-Redirect на страницу `Related Offers`.","available"=>"yes"]);
    }
}
