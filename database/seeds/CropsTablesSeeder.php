<?php

use Illuminate\Database\Seeder;
use App\CropCategory;
use App\CropClassiness;

class CropsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crops & Crops Categories
        $cereals = App\CropCategory::create(["alias"=>"cereals","name"=>"зерновые","translit"=>"zernovyye"]);
        $cereals->crops()->createMany([
            ["alias"=>"corn","name"=>"кукуруза","translit"=>"kukuruza","available"=>"yes"],
            ["alias"=>"wheat","name"=>"пшеница","translit"=>"pshenitsa","available"=>"yes"],
            ["alias"=>"barley","name"=>"ячмень","translit"=>"yachmen","available"=>"yes"],
            ["alias"=>"buckwheat","name"=>"гречиха","translit"=>"grechikha","available"=>"yes"],
            ["alias"=>"millet","name"=>"просо","translit"=>"proso","available"=>"yes"],
            ["alias"=>"rye","name"=>"рожь","translit"=>"rozh","available"=>"yes"],
            ["alias"=>"oats","name"=>"овес","translit"=>"oves","available"=>"yes"],
        ]);
        
        $oilseeds = App\CropCategory::create(["alias"=>"oilseeds","name"=>"масличные","translit"=>"maslichnyye"]);
        $oilseeds->crops()->createMany([
            ["alias"=>"sunflower","name"=>"подсолнечник","translit"=>"podsolnechnik","available"=>"yes"],
            ["alias"=>"rape","name"=>"рапс","translit"=>"raps","available"=>"yes"],
        ]);

        $beans = App\CropCategory::create(["alias"=>"beans","name"=>"бобовые","translit"=>"bobovyye"]);
        $beans->crops()->createMany([
            ["alias"=>"soybean","name"=>"соя","translit"=>"soya","available"=>"yes"],
            ["alias"=>"peas","name"=>"горох","translit"=>"gorokh","available"=>"yes"],
        ]);

        // Crops Classiness
        App\CropClassiness::create(["alias"=>"first","name"=>"первый","translit"=>"pervyy","number"=>1,"available"=>"yes"]);
        App\CropClassiness::create(["alias"=>"second","name"=>"второй","translit"=>"vtoroy","number"=>2,"available"=>"yes"]);
        App\CropClassiness::create(["alias"=>"third","name"=>"третий","translit"=>"tretiy","number"=>3,"available"=>"yes"]);
        App\CropClassiness::create(["alias"=>"fourth","name"=>"четвертый","translit"=>"chetvertyy","number"=>4,"available"=>"yes"]);
        App\CropClassiness::create(["alias"=>"fifth","name"=>"пятый","translit"=>"pyatyy","number"=>5,"available"=>"yes"]);
        App\CropClassiness::create(["alias"=>"sixth","name"=>"шестой","translit"=>"shestoy","number"=>6,"available"=>"yes"]);

    }
}