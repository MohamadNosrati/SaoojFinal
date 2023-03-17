<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('faqs', function (Blueprint $table) {
            $table->text("answerFa")->change();
            $table->text("answerEn")->change();
        });
    }
    public function down()
    {
        Schema::table('faqs', function (Blueprint $table) {
            $table->string("answerFa")->change();
            $table->string("answerEn")->change();
        });
    }
};
