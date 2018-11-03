<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationRegionsDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_regions_districts', function (Blueprint $table) {
            $table->tinyIncrements('id')->comment('PK');
            $table->unsignedTinyInteger('region_id')->comment('FK');

            $table->string('alias', 64)->comment('for the system use, only');
            $table->string('name', 64)->comment('administrative district name on russian (for human eyes)');
            $table->string('translit', 64)->comment('for SEO and marketing');
            $table->enum('available', ['yes', 'no'])->default('no')->comment('display on the site');

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
        Schema::dropIfExists('location_regions_districts');
    }
}
