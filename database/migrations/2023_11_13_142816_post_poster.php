<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_poster', function (Blueprint $table) {
            $table->id();
            $table->string('judul_poster');
            $table->string('sumber_poster');
            $table->string('deskripsi_poster');
            $table->string('gambar_poster');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_poster');
    }
};
