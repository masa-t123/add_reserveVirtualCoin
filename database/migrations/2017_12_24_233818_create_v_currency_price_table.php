<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVCurrencyPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_currency_price', function (Blueprint $table) {
            $table->increments('v_currency_price_id');
            $table->integer('exchange_m_id');
            $table->integer('v_currency_m_id');
            $table->integer('price');
            $table->time('disp_day');
            $table->integer('count_by_day');
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
        Schema::dropIfExists('v_currency_price');
    }
}
