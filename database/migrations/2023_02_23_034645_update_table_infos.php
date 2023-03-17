<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('infos', function (Blueprint $table) {
            $table->dropColumn("video");
            $table->dropColumn("video_id");
//            $table->addColumn("string","video")->nullable();
//            $table->addColumn("string","video_id")->nullable();
        });
    }
    public function down()
    {
        Schema::table('infos', function (Blueprint $table) {
            $table->addColumn("string","video");
            $table->addColumn("string","video_id");
        });
    }
};
