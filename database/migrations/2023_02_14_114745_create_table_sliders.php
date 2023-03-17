<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string("image",255);
            $table->string("altFa",255);
            $table->string("altEn",255);
            $table->string("titleFa",255);
            $table->string("titleEn",255);
            $table->text("textFa");
            $table->text("textEn");
            $table->boolean("publish");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
};
