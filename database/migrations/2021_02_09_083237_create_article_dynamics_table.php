<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleDynamicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_dynamics', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->string('titre', 100);
            $table->string('subtitle', 100);
            $table->longText('texte', 400);

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
        Schema::dropIfExists('article_dynamics');
    }
}
