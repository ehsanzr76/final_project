<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile')->nullable();
            $table->string('zipcode')->nullable();
            $table->text('address')->nullable();
            $table->string('state')->nullable();
            $table->string('randcode')->nullable();
            $table->tinyInteger('role')->nullable()->default(0);
            $table->enum('status' , ['active' , 'inactive' , 'block'])->nullable()->default('active');
            $table->tinyInteger('gender')->nullable()->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
