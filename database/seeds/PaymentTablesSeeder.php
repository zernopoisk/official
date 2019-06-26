<?php

use Illuminate\Database\Seeder;
use App\PaymentForm;
use App\PaymentMethod;

class PaymentTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed Payment Forms
        App\PaymentForm::create(["alias"=>"cash","name"=>"наличные","translit"=>"nalichnyye"]);
        App\PaymentForm::create(["alias"=>"noncash","name"=>"безналичные","translit"=>"beznalichnyye"]);

        // Seed Payment Methods
        App\PaymentMethod::create(["alias"=>"prepayment","name"=>"предоплата","translit"=>"predoplata","available"=>"yes"]);
        App\PaymentMethod::create(["alias"=>"upon_shipment","name"=>"по факту отгрузки","translit"=>"po_faktu_otgruzki","available"=>"yes"]);
        App\PaymentMethod::create(["alias"=>"deferment_of_payment","name"=>"отсрочка платежа","translit"=>"otsrochka_platezha","available"=>"yes"]);
    }
    
}
