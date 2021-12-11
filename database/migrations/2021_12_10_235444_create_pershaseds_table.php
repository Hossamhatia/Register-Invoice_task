<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePershasedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pershaseds', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('ProductName');
            $table->string('CustomerName');
            $table->integer('Quantity');
            $table->integer('Totalprice');
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
        Schema::dropIfExists('_pershaseds');
    }
}
