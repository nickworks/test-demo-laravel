<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->text('description')->nullable();
            $table->unsignedInteger('year');
        });
    }
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
