<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncotermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoterms', function (Blueprint $table) {
            $table->tinyIncrements('id')->comment('PK');
            $table->unsignedTinyInteger('group_id')->comment('FK');

            $table->char('alias', 3)->comment('for the system use, only');
            $table->char('abbr', 3)->comment('abbreviation on english (for human eyes)');
            $table->string('term_en', 32)->comment('term on english (for human eyes)');
            $table->mediumText('specification')->comment('specification on russian (for human eyes)');
            $table->enum('type_of_transport', ['any','water'])->default('any')->comment('to highlight types of incoterms transport');
            $table->enum('available', ['yes', 'no'])->default('no')->comment('display on the site');

            // Indexes.
            $table->index('group_id');

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
        Schema::dropIfExists('incoterms');
    }
}
