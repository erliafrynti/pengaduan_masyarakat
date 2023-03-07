<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasyarakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->id('id');
            $table->string('nik');
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->string('telp');
            $table->enum('jenkel', ['perempuan','laki-laki']);
            $table->enum('level', ['admin','petugas','user']);
            $table->text('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kodepos');
            $table->string('province_id');
            $table->string('regency_id');
            $table->string('district_id');
            $table->string('village_id');

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
        Schema::dropIfExists('masyarakats');
    }
}
