<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id',10000000);
            $table->string('taskname');
            $table->integer('creator');  
            $table->integer('owner');
            $table->integer('progress');
            $table->integer('revenue');
            $table->integer('evaluation');
            $table->string('status');
            $table->string('description');
            $table->integer('duration');
            $table->date('startdate');
            $table->date('enddate');
            $table->integer('costbaseline');
            $table->integer('team_id'); 
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
        Schema::dropIfExists('tasks');
    }
}
