<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePickupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickup', function (Blueprint $table) {
            $table->tinyIncrements('id')->comment('PK');

            $table->string('alias', 64)->comment('for the system use, only');
            $table->string('name', 32)->comment('pickup way name on russian (for human eyes)');
            $table->string('translit', 32)->comment('for SEO and marketing');
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
        Schema::dropIfExists('pickup');
    }
}
