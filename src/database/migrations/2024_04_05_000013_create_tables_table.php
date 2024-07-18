<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('place');
            $table->string('name');
            $table->time('start')->nullable();
            $table->time('finish')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
