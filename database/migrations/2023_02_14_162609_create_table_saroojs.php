<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('saroojs', function (Blueprint $table) {
            $table->id();
            $table->string("email",255);
            $table->string("addressFa",500);
            $table->string("addressEn",500);
            $table->string("phone1");
            $table->string("phone2")->nullable();
            $table->string("telegram",500);
            $table->string("instagram",500);
            $table->string("linkin",500);
            $table->text("blogFa");
            $table->text("blogEn");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('saroojs');
    }
};
