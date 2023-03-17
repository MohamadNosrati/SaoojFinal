<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string("ServiceImage");
            $table->string("altServiceImageFa");
            $table->string("altServiceImageEn");
            $table->string("projectsImage");
            $table->string("altProjectsImageFa");
            $table->string("altProjectsImageEn");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('generals');
    }
};
