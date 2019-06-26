<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('judul');
            $table->String('slug');
            $table->text('konten');
            $table->String('foto');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->ondelete('cascade');
            $table->unsignedBigInteger('id_catagory');
            $table->foreign('id_catagory')->references('id')->on('catagories')->ondelete('cascade');
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
        Schema::dropIfExists('artikels');
    }
}