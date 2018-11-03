<?php

use Illuminate\Database\Seeder;
use App\SellerType;

class SellerTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SellerType::create(["alias"=>"farming","name"=>"фермерское хозяйство","translit"=>"fermerskoye_khozyaystvo","available"=>"yes"]);
        App\SellerType::create(["alias"=>"trader","name"=>"зернотрейдер","translit"=>"treyder","available"=>"yes"]);
        App\SellerType::create(["alias"=>"dealer","name"=>"посредник","translit"=>"posrednik","available"=>"no"]);
        App\SellerType::create(["alias"=>"private","name"=>"частное лицо","translit"=>"chastnoye","available"=>"no"]);
    }
}
