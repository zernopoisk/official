<?php

use Illuminate\Database\Seeder;
use App\LocationRegion;

class LocationTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Vinnytsia = App\LocationRegion::create(["alias"=>"Vinnytsia","name"=>"Винницкая","translit"=>"Vinnitskaya","type"=>"region","available"=>"yes"]);
        $Vinnytsia->administrativeCenter()->create(["alias"=>"Vinnitsa","name"=>"Винница","translit"=>"Vinnitsa"]);
        $Vinnytsia->districts()->createMany([
            ['alias'=>'Barsky','name'=>'Барский','translit'=>'Barskiy','available'=>'yes'],
            ['alias'=>'Bershad','name'=>'Бершадский','translit'=>'Bershadskij','available'=>'yes'],
            ['alias'=>'Vinnitsa','name'=>'Винницкий','translit'=>'Vinnitskiy','available'=>'yes'],
        ]);
        
        $Odessa = App\LocationRegion::create(["alias"=>"Odessa","name"=>"Одесская","translit"=>"Odesskaya","type"=>"region","available"=>"yes"]);
        $Odessa->administrativeCenter()->create(["alias"=>"Odessa","name"=>"Одесса","translit"=>"Odessa"]);

        $Poltava = App\LocationRegion::create(["alias"=>"Poltava","name"=>"Полтавская","translit"=>"Poltavskaya","type"=>"region","available"=>"yes"]);
        $Poltava->administrativeCenter()->create(["alias"=>"Poltava","name"=>"Полтава","translit"=>"Poltava"]);

        $Rivne = App\LocationRegion::create(["alias"=>"Rivne","name"=>"Ровенская","translit"=>"Rovenskaya","type"=>"region","available"=>"yes"]);
        $Rivne->administrativeCenter()->create(["alias"=>"Rovno","name"=>"Ровно","translit"=>"Rovno"]);

        $Sumy = App\LocationRegion::create(["alias"=>"Sumy","name"=>"Сумская","translit"=>"Sumskaya","type"=>"region","available"=>"yes"]);
        $Sumy->administrativeCenter()->create(["alias"=>"Sumy","name"=>"Сумы","translit"=>"Sumy"]);

        $Ternopil = App\LocationRegion::create(["alias"=>"Ternopil","name"=>"Тернопольская","translit"=>"Ternopolskaya","type"=>"region","available"=>"yes"]);
        $Ternopil->administrativeCenter()->create(["alias"=>"Ternopil","name"=>"Тернополь","translit"=>"Ternopol"]);

        $Kharkivska = App\LocationRegion::create(["alias"=>"Kharkivska","name"=>"Харьковская","translit"=>"Kharkovskaya","type"=>"region","available"=>"yes"]);
        $Kharkivska->administrativeCenter()->create(["alias"=>"Kharkiv","name"=>"Харьков","translit"=>"Kharkov"]);

        $Kherson = App\LocationRegion::create(["alias"=>"Kherson","name"=>"Херсонская","translit"=>"Khersonskaya","type"=>"region","available"=>"yes"]);
        $Kherson->administrativeCenter()->create(["alias"=>"Kherson","name"=>"Херсон","translit"=>"Kherson"]);

        $Khmelnytskyi = App\LocationRegion::create(["alias"=>"Khmelnytskyi","name"=>"Хмельницкая","translit"=>"Khmelnitskaya","type"=>"region","available"=>"yes"]);
        $Khmelnytskyi->administrativeCenter()->create(["alias"=>"Khmelnytskyi","name"=>"Хмельницкий","translit"=>"Khmelnitskiy"]);

        $Cherkasy = App\LocationRegion::create(["alias"=>"Cherkasy","name"=>"Черкасская","translit"=>"Cherkasskaya","type"=>"region","available"=>"yes"]);
        $Cherkasy->administrativeCenter()->create(["alias"=>"Cherkassy","name"=>"Черкассы","translit"=>"Cherkassy"]);

        $Chernihiv = App\LocationRegion::create(["alias"=>"Chernihiv","name"=>"Черниговская","translit"=>"Chernigovskaya","type"=>"region","available"=>"yes"]);
        $Chernihiv->administrativeCenter()->create(["alias"=>"Chernigov","name"=>"Чернигов","translit"=>"Chernigov"]);

        $Mykolayiv = App\LocationRegion::create(["alias"=>"Mykolayiv","name"=>"Николаевская","translit"=>"Nikolayevskaya","type"=>"region","available"=>"yes"]);
        $Mykolayiv->administrativeCenter()->create(["alias"=>"Mykolaiv","name"=>"Николаев","translit"=>"Nikolayev"]);

        $Lviv = App\LocationRegion::create(["alias"=>"Lviv","name"=>"Львовская","translit"=>"Lvovskaya","type"=>"region","available"=>"yes"]);
        $Lviv->administrativeCenter()->create(["alias"=>"Lviv","name"=>"Львов","translit"=>"Lvov"]);

        $Luhansk = App\LocationRegion::create(["alias"=>"Luhansk","name"=>"Луганская","translit"=>"Luganskaya","type"=>"region","available"=>"yes"]);
        $Luhansk->administrativeCenter()->create(["alias"=>"Severodonetsk","name"=>"Северодонецк","translit"=>"Severodonetsk"]);

        $Volynska = App\LocationRegion::create(["alias"=>"Volynska","name"=>"Волынская","translit"=>"Volynskaya","type"=>"region","available"=>"yes"]);
        $Volynska->administrativeCenter()->create(["alias"=>"Lutsk","name"=>"Луцк","translit"=>"Lutsk"]);

        $Dnepropetrovsk = App\LocationRegion::create(["alias"=>"Dnepropetrovsk","name"=>"Днепропетровская","translit"=>"Dnepropetrovskaya","type"=>"region","available"=>"yes"]);
        $Dnepropetrovsk->administrativeCenter()->create(["alias"=>"Dnieper","name"=>"Днепр","translit"=>"Dnepr"]);

        $Donetsk = App\LocationRegion::create(["alias"=>"Donetsk","name"=>"Донецкая","translit"=>"Donetskaya","type"=>"region","available"=>"yes"]);
        $Donetsk->administrativeCenter()->create(["alias"=>"Donetsk","name"=>"Донецк","translit"=>"Donetsk"]);

        $Zhitomirskaya = App\LocationRegion::create(["alias"=>"Zhitomirskaya","name"=>"Житомирская","translit"=>"Zhitomirskaya","type"=>"region","available"=>"yes"]);
        $Zhitomirskaya->administrativeCenter()->create(["alias"=>"Zhitomir","name"=>"Житомир","translit"=>"Zhitomir"]);

        $Transcarpathian = App\LocationRegion::create(["alias"=>"Transcarpathian","name"=>"Закарпатская","translit"=>"Zakarpatskaya","type"=>"region","available"=>"yes"]);
        $Transcarpathian->administrativeCenter()->create(["alias"=>"Uzhhorod","name"=>"Ужгород","translit"=>"Uzhgorod"]);

        $Zaporozhye = App\LocationRegion::create(["alias"=>"Zaporozhye","name"=>"Запорожская","translit"=>"Zaporozhskaya","type"=>"region","available"=>"yes"]);
        $Zaporozhye->administrativeCenter()->create(["alias"=>"Zaporozhye","name"=>"Запорожье","translit"=>"Zaporozhye"]);

        $IvanoFrankivsk = App\LocationRegion::create(["alias"=>"Ivano_Frankivsk","name"=>"Ивано-Франковская","translit"=>"Ivano-Frankovskaya","type"=>"region","available"=>"yes"]);
        $IvanoFrankivsk->administrativeCenter()->create(["alias"=>"Ivano_Frankivsk","name"=>"Ивано-Франковск","translit"=>"Ivano-Frankovsk"]);

        $Kievskaya = App\LocationRegion::create(["alias"=>"Kievskaya","name"=>"Киевская","translit"=>"Kiyevskaya","type"=>"region","available"=>"yes"]);
        $Kievskaya->administrativeCenter()->create(["alias"=>"Kiev","name"=>"Киев","translit"=>"Kiyev"]);

        $Kirovograd = App\LocationRegion::create(["alias"=>"Kirovograd","name"=>"Кировоградская","translit"=>"Kirovogradskaya","type"=>"region","available"=>"yes"]);
        $Kirovograd->administrativeCenter()->create(["alias"=>"Kropiwnicki","name"=>"Кропивницкий","translit"=>"Kropivnitskiy"]);

        $Chernivtsi = App\LocationRegion::create(["alias"=>"Chernivtsi","name"=>"Черновицкая","translit"=>"Chernovitskaya","type"=>"region","available"=>"yes"]);
        $Chernivtsi->administrativeCenter()->create(["alias"=>"Chernivtsi","name"=>"Черновцы","translit"=>"Chernovtsy"]);

        $Kiev = App\LocationRegion::create(["alias"=>"Kiev","name"=>"Киев","translit"=>"Kiyev","type"=>"city","available"=>"yes"]);
    }
}
