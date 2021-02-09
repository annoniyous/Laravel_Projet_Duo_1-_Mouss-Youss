<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactStaticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_statics', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 100);
            $table->longText('p', 400);
            $table->string('placeholder1', 150);
            $table->string('placeholder2', 150);
            $table->string('placeholder3', 150);
            $table->string('placeholder4', 150);
            $table->string('btn', 150);
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
        Schema::dropIfExists('contact_statics');
    }
}
