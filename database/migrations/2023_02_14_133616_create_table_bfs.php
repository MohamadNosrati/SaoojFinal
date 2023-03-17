<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bfs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("info_id");
            $table->foreign("info_id")->references("id")->on("infos")->onDelete("cascade");
            $table->string("imageBefore",255);
            $table->string("altBeforeFa",255);
            $table->string("altBeforeEn",255);
            $table->string("imageAfter",255);
            $table->string("altAfterFa",255);
            $table->string("altAfterEn",255);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('bfs');
    }
};
