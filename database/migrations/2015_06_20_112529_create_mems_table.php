<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mems', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title',100);
            $table->text('img_path');
            $table->integer('plus');
            $table->integer('minus');
            $table->enum('approved','yes','no');
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
        //
        Schema::drop('mems');
    }
}
