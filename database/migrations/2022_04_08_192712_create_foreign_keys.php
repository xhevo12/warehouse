<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('product', function (Blueprint $table) {
            $table->foreign('contain_article')->references('id')->on('contain_articles')->onDelete('cascade');   
        });
        Schema::table('contain_articles', function (Blueprint $table) {
            $table->foreign('art_id')->references('id')->on('inventory')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('foreign_keys');
    }
}
