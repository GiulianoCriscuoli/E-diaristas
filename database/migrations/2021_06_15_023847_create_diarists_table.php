<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diarists', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 100);
            $table->char('cpf', 14);
            $table->string('email', 100);
            $table->char('phone', 14);
            $table->string('address');
            $table->string('number', 20);
            $table->string('city', 50);
            $table->string('district', 50);
            $table->string('complement', 50)->nullable();
            $table->char('cep', 9);
            $table->char('state', 2);
            $table->integer('code_ibge');
            $table->string('user_photo');           
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
        Schema::dropIfExists('diarists');
    }
}
