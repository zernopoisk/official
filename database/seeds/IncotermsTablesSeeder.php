<?php

use Illuminate\Database\Seeder;
use App\IncotermsGroup;

class IncotermsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $e = App\IncotermsGroup::create(["alias"=>"departure","name"=>"E","term_en"=>"departure","specification"=>"Отгрузка, переход обязательств — у места отправки (англ. departure). Продавец обязан предоставить товары покупателю непосредственно на предприятии-изготовителе, своём складе, таможенная очистка товара продавцом не производится; Продавец не отвечает за погрузку товара на транспортное средство; EXW.","available"=>"yes"]);
        $e->incoterms()->createMany([
            ["alias"=>"exw","abbr"=>"EXW","term_en"=>"ex works","specification"=>"франко-склад, франко-завод: товар забирается покупателем с указанного в договоре склада продавца, оплата экспортных пошлин вменяется в обязанность покупателю","type_of_transport"=>"any","available"=>"yes"]
        ]);

        $f = App\IncotermsGroup::create(["alias"=>"main_carriage_unpaid","name"=>"F","term_en"=>"main carriage unpaid","specification"=>"Основная перевозка не оплачена продавцом (англ. main carriage unpaid), переход обязательств у терминалов отправления для основной перевозки. Продавец обязуется поставить товар в распоряжение перевозчика, которого покупатель нанимает самостоятельно; FCA, FAS, FOB.","available"=>"yes"]);
        $f->incoterms()->createMany([
            ["alias"=>"fca","abbr"=>"FCA","term_en"=>"free carrier","specification"=>"франко-перевозчик: товар доставляется основному перевозчику заказчика к указанному в договоре терминалу отправления, экспортные пошлины уплачивает продавец","type_of_transport"=>"any","available"=>"yes"],
            ["alias"=>"fas","abbr"=>"FAS","term_en"=>"free alongside ship","specification"=>"товар доставляется к судну покупателя, в договоре указывается порт погрузки, перевалку и погрузку оплачивает покупатель","type_of_transport"=>"water","available"=>"yes"],
            ["alias"=>"fob","abbr"=>"FOB","term_en"=>"free on board","specification"=>"товар отгружается на судно покупателя, перевалку оплачивает продавец.","type_of_transport"=>"water","available"=>"yes"],
        ]);

        $c = App\IncotermsGroup::create(["alias"=>"main_carriage_paid","name"=>"C","term_en"=>"main carriage paid","specification"=>"Основная перевозка оплачена продавцом (англ. main carriage paid), переход обязательств — у терминалов прибытия для основной перевозки. Продавец обязан заключить договор перевозки товара, но без принятия на себя риска его случайной гибели или повреждения товара; CFR, CIF, CPT, CIP.","available"=>"yes"]);
        $c->incoterms()->createMany([
            ["alias"=>"cpt","abbr"=>"CPT","term_en"=>"carriage paid to…","specification"=>"товар доставляется основному перевозчику заказчика, основную перевозку до указанного в договоре терминала прибытия оплачивает продавец, расходы по страховке несёт покупатель, импортную растаможку и доставку с терминала прибытия основного перевозчика осуществляет покупатель","type_of_transport"=>"any","available"=>"yes"],
            ["alias"=>"cip","abbr"=>"CIP","term_en"=>"carriage and insurance paid to…","specification"=>"то же, что CPT (а именно: товар доставляется основному перевозчику заказчика, основную перевозку до указанного в договоре терминала прибытия оплачивает продавец, расходы по страховке несёт покупатель, импортную растаможку и доставку с терминала прибытия основного перевозчика осуществляет покупатель), но основная перевозка страхуется продавцом","type_of_transport"=>"any","available"=>"yes"],
            ["alias"=>"cfr","abbr"=>"CFR","term_en"=>"cost and freight","specification"=>"товар доставляется до указанного в договоре порта назначения покупателя, страховку основной перевозки, разгрузку и перевалку оплачивает покупатель","type_of_transport"=>"water","available"=>"yes"],
            ["alias"=>"cif","abbr"=>"CIF","term_en"=>"cost, Insurance and Freight","specification"=>"то же, что CFR (а именно: товар доставляется до указанного в договоре порта назначения покупателя, страховку основной перевозки, разгрузку и перевалку оплачивает покупатель), но основную перевозку страхует продавец","type_of_transport"=>"water","available"=>"yes"],
        ]);
        
        $d = App\IncotermsGroup::create(["alias"=>"arrival","name"=>"D","term_en"=>"arrival","specification"=>"Прибытие, переход обязательств у покупателя, полноценная доставка (англ. arrival). Продавец несёт все расходы по доставке и принимает на себя все риски до момента доставки товара в страну назначения; DAT, DAP, DDP.","available"=>"yes"]);
        $d->incoterms()->createMany([
            ["alias"=>"dat","abbr"=>"DAT","term_en"=>"delivered at terminal","specification"=>"поставка до указанного в договоре импортного таможенного терминала оплачена, то есть экспортные платежи и основную перевозку, включая страховку оплачивает продавец, таможенная очистка по импорту осуществляется покупателем","type_of_transport"=>"any","available"=>"yes"],
            ["alias"=>"dap","abbr"=>"DAP","term_en"=>"delivered at place","specification"=>"поставка в место назначения, указанное в договоре, импортные пошлины и местные налоги оплачиваются покупателем","type_of_transport"=>"any","available"=>"yes"],
            ["alias"=>"ddp","abbr"=>"DDP","term_en"=>"delivered duty paid","specification"=>"товар доставляется заказчику в место назначения, указанное в договоре, очищенный от всех таможенных пошлин и рисков","type_of_transport"=>"any","available"=>"yes"],
        ]);

    }

}
