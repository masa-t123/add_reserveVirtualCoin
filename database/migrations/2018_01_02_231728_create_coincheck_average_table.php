<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoincheckAverageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coincheck_average', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->double('btc')->nullable();
            $table->double('eth')->nullable();
            $table->double('etc')->nullable();
            $table->double('lsk')->nullable();
            $table->double('fct')->nullable();
            $table->double('xmr')->nullable();
            $table->double('rep')->nullable();
            $table->double('xrp')->nullable();
            $table->double('zec')->nullable();
            $table->double('xem')->nullable();
            $table->double('ltc')->nullable();
            $table->double('dash')->nullable();
            $table->double('bch')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coincheck_average');
    }
}
