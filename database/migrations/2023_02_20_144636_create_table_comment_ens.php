<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comment_ens', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->text("text");
            $table->boolean("publish")->default(0);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('commentEns');
    }
};
