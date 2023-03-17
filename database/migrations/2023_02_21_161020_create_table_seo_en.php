<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('seo_Ens', function (Blueprint $table) {
            $table->id();
            $table->string("page");
            $table->string("title",255);
            $table->text("description");
            $table->text("keywords");
            $table->string("author");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('seo_Ens');
    }
};
