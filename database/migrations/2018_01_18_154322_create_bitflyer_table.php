<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitflyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitflyer', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->double('btc')->nullable();
            $table->double('fx_btc')->nullable();
            $table->double('eth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitflyer');
    }
}
