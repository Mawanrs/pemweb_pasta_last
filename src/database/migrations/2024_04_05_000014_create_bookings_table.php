<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pemesan')->nullable();
            $table->string('jenis_tempat')->nullable();
            $table->string('jenis_tamu')->nullable();
            $table->string('jumlah_tamu')->nullable();
            $table->datetime('start_book')->nullable();
            $table->datetime('finish_book')->nullable();
            $table->string('category')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
