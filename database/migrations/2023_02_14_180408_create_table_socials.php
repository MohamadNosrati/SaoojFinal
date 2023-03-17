<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->text("icon");
            $table->string("link");
            $table->unsignedBigInteger("team_id");
            $table->foreign("team_id")->references("id")->on("teams")->onDelete("cascade");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('socials');
    }
};
