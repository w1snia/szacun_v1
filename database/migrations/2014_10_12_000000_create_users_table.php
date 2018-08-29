<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('department')->nullable();
            $table->integer('i')->default(0);
            $table->integer('q')->default(0);
            $table->integer('o')->default(0);
            $table->integer('r')->default(0);
            $table->integer('i2')->default(0);
            $table->integer('a')->default(0);
            $table->integer('n')->default(0);

            $table->integer('itotal')->default(0);
            $table->integer('qtotal')->default(0);
            $table->integer('ototal')->default(0);
            $table->integer('rtotal')->default(0);
            $table->integer('i2total')->default(0);
            $table->integer('atotal')->default(0);
            $table->integer('ntotal')->default(0);
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
