<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->bigInteger('media_id')->unsigned()->nullable();
            $table->string('mobile');
            $table->string('BusinessNumber');
            $table->text('address');
            $table->integer('hit')->unsigned()->nullable();
            $table->boolean('status')->default(0);
            $table->bigInteger('category_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE');
            $table->foreign('media_id')->references('id')->on('media')->onDelete('CASCADE');
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
        Schema::dropIfExists('businesses');
    }
}
