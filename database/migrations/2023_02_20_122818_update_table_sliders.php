<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->text("textFa")->change();
            $table->text("textEn")->change();
        });
    }
    public function down()
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->string("textFa")->change();
            $table->string("textEn")->change();
        });
    }
};
