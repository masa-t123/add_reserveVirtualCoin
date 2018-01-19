<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binance', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->double('eth')->nullable();
            $table->double('ltc')->nullable();
            $table->double('bnb')->nullable();
            $table->double('neo')->nullable();
            $table->double('bcc')->nullable();
            $table->double('gas')->nullable();
            $table->double('hsr')->nullable();
            $table->double('mco')->nullable();
            $table->double('wtc')->nullable();
            $table->double('lrc')->nullable();
            $table->double('qtum')->nullable();
            $table->double('yoyo')->nullable();
            $table->double('omg')->nullable();
            $table->double('zrx')->nullable();
            $table->double('strat')->nullable();
            $table->double('sngls')->nullable();
            $table->double('bqx')->nullable();
            $table->double('knc')->nullable();
            $table->double('fun')->nullable();
            $table->double('snm')->nullable();
            $table->double('iota')->nullable();
            $table->double('link')->nullable();
            $table->double('xvg')->nullable();
            $table->double('ctr')->nullable();
            $table->double('salt')->nullable();
            $table->double('mda')->nullable();
            $table->double('mtl')->nullable();
            $table->double('sub')->nullable();
            $table->double('eos')->nullable();
            $table->double('snt')->nullable();
            $table->double('etc')->nullable();
            $table->double('mth')->nullable();
            $table->double('eng')->nullable();
            $table->double('dnt')->nullable();
            $table->double('zec')->nullable();
            $table->double('bnt')->nullable();
            $table->double('ast')->nullable();
            $table->double('dash')->nullable();
            $table->double('oax')->nullable();
            $table->double('icn')->nullable();
            $table->double('btg')->nullable();
            $table->double('evx')->nullable();
            $table->double('req')->nullable();
            $table->double('vib')->nullable();
            $table->double('trx')->nullable();
            $table->double('powr')->nullable();
            $table->double('ark')->nullable();
            $table->double('xrp')->nullable();
            $table->double('mod')->nullable();
            $table->double('enj')->nullable();
            $table->double('storj')->nullable();
            $table->double('ven')->nullable();
            $table->double('kmd')->nullable();
            $table->double('rcn')->nullable();
            $table->double('nuls')->nullable();
            $table->double('rdn')->nullable();
            $table->double('xmr')->nullable();
            $table->double('dlt')->nullable();
            $table->double('amb')->nullable();
            $table->double('bat')->nullable();
            $table->double('bcpt')->nullable();
            $table->double('arn')->nullable();
            $table->double('gvt')->nullable();
            $table->double('cdt')->nullable();
            $table->double('gxs')->nullable();
            $table->double('poe')->nullable();
            $table->double('qsp')->nullable();
            $table->double('bts')->nullable();
            $table->double('xzc')->nullable();
            $table->double('lsk')->nullable();
            $table->double('tnt')->nullable();
            $table->double('fuel')->nullable();
            $table->double('mana')->nullable();
            $table->double('bcd')->nullable();
            $table->double('dgd')->nullable();
            $table->double('adx')->nullable();
            $table->double('ada')->nullable();
            $table->double('ppt')->nullable();
            $table->double('cmt')->nullable();
            $table->double('xlm')->nullable();
            $table->double('cnd')->nullable();
            $table->double('lend')->nullable();
            $table->double('wabi')->nullable();
            $table->double('tnb')->nullable();
            $table->double('waves')->nullable();
            $table->double('gto')->nullable();
            $table->double('icx')->nullable();
            $table->double('ost')->nullable();
            $table->double('elf')->nullable();
            $table->double('aion')->nullable();
            $table->double('nebl')->nullable();
            $table->double('brd')->nullable();
            $table->double('edo')->nullable();
            $table->double('wings')->nullable();
            $table->double('nav')->nullable();
            $table->double('lun')->nullable();
            $table->double('trig')->nullable();
            $table->double('appc')->nullable();
            $table->double('vibe')->nullable();
            $table->double('rlc')->nullable();
            $table->double('ins')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('binance');
    }
}
