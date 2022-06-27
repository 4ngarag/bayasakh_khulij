<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ru');
            $table->string('name_mn');
            $table->text('intro_en');
            $table->text('intro_ru');
            $table->text('intro_mn');
            $table->string('direction_en');
            $table->string('direction_ru');
            $table->string('direction_mn');
            $table->string('logo_en');
            $table->string('logo_ru');
            $table->string('logo_mn');
            $table->string('start_year');
            $table->string('company_size');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
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
        Schema::dropIfExists('companies');
    }
};
