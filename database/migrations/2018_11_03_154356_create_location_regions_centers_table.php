<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationRegionsCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_regions_centers', function (Blueprint $table) {
            $table->tinyIncrements('id')->comment('PK');
            $table->unsignedTinyInteger('region_id')->comment('FK');

            $table->string('alias', 32)->comment('for the system use, only');
            $table->string('name', 32)->comment('administrative center name on russian (for human eyes)');
            $table->string('translit', 32)->comment('for SEO and marketing');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_regions_centers');
    }
}
