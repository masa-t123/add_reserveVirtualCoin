<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZaifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaif', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->double('btc')->nullable();
            $table->double('xem')->nullable();
            $table->double('mona')->nullable();
            $table->double('bch')->nullable();
            $table->double('eth')->nullable();
            $table->double('zaif')->nullable();
            $table->double('xcp')->nullable();
            $table->double('bcy')->nullable();
            $table->double('sjcx')->nullable();
            $table->double('fscc')->nullable();
            $table->double('pepecash')->nullable();
            $table->double('cicc')->nullable();
            $table->double('ncxc')->nullable();
            $table->double('jpyz')->nullable();
            $table->double('cms_eth')->nullable();
            $table->double('cms_xem')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zaif');
    }
}
