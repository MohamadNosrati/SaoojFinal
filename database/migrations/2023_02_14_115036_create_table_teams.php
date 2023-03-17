<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("altFa");
            $table->string("altEn");
            $table->string("nameFa");
            $table->string("nameEn");
            $table->string("jobFa");
            $table->string("jobEn");
            $table->text("textFa");
            $table->text("textEn");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
