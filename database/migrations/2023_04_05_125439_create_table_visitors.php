<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string("Ip");
            $table->string("country")->nullable();
            $table->string("city")->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
};
