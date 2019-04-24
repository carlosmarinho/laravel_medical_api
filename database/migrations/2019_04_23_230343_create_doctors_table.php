<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name', 100);
            $table->string('crm', 50);
            $table->string('telefone', 20);
            $table->integer('activity_id')->unsigned();
            $table->date('deleted_at');
            $table->timestamps();
            $table->foreign('activity_id')->references('id')->on('activities');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
