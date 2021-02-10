<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeStaticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_statics', function (Blueprint $table) {
            $table->id();
            $table->integer('section');
            $table->string('titre', 100);
            $table->string('subtitle', 100)->nullable();
            $table->string('btn1', 100)->nullable();
            $table->string('btn2', 100)->nullable();
            $table->longText('p1', 500)->nullable();
            $table->longText('p2', 500)->nullable();
            $table->string('img', 200);
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
        Schema::dropIfExists('home_statics');
    }
}
