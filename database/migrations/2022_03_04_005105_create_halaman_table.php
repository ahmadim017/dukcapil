<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('index');
            $table->integer('id_index')->nullable();
            $table->integer('id_menu')->nullable();
            $table->integer('id_halaman')->nullable();
            $table->string('halaman')->nullable();
            $table->string('foto')->nullable();
            $table->string('tittle')->nullable();
            $table->string('link')->nullable();
            $table->text('isi')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('status')->nullable();
            $table->integer('view')->nullable();
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
        Schema::dropIfExists('halaman');
    }
}
