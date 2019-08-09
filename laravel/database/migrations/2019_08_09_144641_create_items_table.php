<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplyname');
            $table->integer('supplyid');
            $table->string('unit');
            $table->string('code');
            $table->integer('qty');
            $table->integer('price');
            $table->string('description');
            $table->integer('owner');
            $table->integer('creator');
            $table->string('status');
            $table->string('type');
            $table->integer('team_id');
            $table->integer('exowner');
            $table->integer('parentid');
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
        Schema::dropIfExists('items');
    }
}
