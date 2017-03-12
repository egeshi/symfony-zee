<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hashes', function (Blueprint $table){
            $table->string("hash");
            $table->integer("word_id")
                ->unsigned();
            $table->primary('word_id');
            $table->foreign('word_id')
                ->references('id')
                ->on('vocabulary')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::drop('hashes');
        Schema::enableForeignKeyConstraints();
    }
}
