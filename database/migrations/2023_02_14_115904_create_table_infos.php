<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->date("startFa");
            $table->date("startEn");
            $table->date("endFa");
            $table->date("endEn");
            $table->integer("area");
            $table->text("textFa");
            $table->text("textEn");
            $table->string("video");
            $table->unsignedBigInteger("project_id");
            $table->foreign("project_id")->references("id")->on("projects")->onDelete("cascade");
            $table->string("poster");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('infos');
    }
};
