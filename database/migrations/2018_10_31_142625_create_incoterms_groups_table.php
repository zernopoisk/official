<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncotermsGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoterms_groups', function (Blueprint $table) {
            $table->tinyIncrements('id')->comment('PK');

            $table->string('alias', 32)->comment('for the system use, only');
            $table->char('name', 1)->comment('group identifier character');
            $table->string('term_en', 32)->comment('group name, - term on english (for human eyes)');
            $table->mediumText('specification')->comment('specification on russian (for human eyes)');
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
        Schema::dropIfExists('incoterms_groups');
    }
}
