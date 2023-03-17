<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('saroojs', function (Blueprint $table) {
            $table->string("logo");
            $table->string("altLogoFa");
            $table->string("altLogoEn");
        });
    }
    public function down()
    {
        Schema::table('saroojs', function (Blueprint $table) {
            $table->dropColumn("logo");
            $table->dropColumn("altLogoFa");
            $table->dropColumn("altLogoEn");
        });
    }
};
