<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Articles extends Migration
{

    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('title')->unique();
            $table->string('image');
            $table->longText('content');
            $table->integer('hit')->default(0)->nullable();
            $table->integer('status')->default(0)->comment('0 passif 1 aktiv');
            $table->string('slug');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
