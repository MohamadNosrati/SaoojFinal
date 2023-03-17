<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("image",500);
            $table->string("altFa",255);
            $table->string("altEn",255);
            $table->string("nameFa",255);
            $table->string("nameEn",255);
            $table->boolean("publish");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
