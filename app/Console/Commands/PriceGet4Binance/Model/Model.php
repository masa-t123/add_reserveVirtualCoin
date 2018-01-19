<?php

namespace App\Console\Commands\PriceGet4Binance\Model;

use App\Library\ApiClient\BinanceApi\BinanceApi;
use App\Library\Database\BinanceDatabase;
use App\Library\Database\ZaifDatabase;
use App\Console\Commands\PriceGet4Binance\Factory\Factory;

class Model
{
    public function __construct()
    {
    }

    /**
     * メイン実行
     * @throws \Exception
     */
    public function exec()
    {

        // binance APIの実行
        $binance = new BinanceApi(
            \Config::get('appconfig.binanceToken.key'),
            \Config::get('appconfig.binanceToken.secret')
        );
        $result = $binance->pub(BinanceApi::REQUEST_TICKER, BinanceApi::PAIR_ALL);
        if(!$result->getIsSuccess()) {
            throw new \Exception('BinanceAPIの実行に失敗しました status:'.$result->getStatusCode(). ' response:'.json_encode($result->getBody()), true);
        }
        $priceList = $result->getBody();

        // zaifからbtcの価格を取得
        $zaif = new ZaifDatabase(ZaifDatabase::TABLE_NAME_PRICE);
        $btcPrice = $zaif->getBtcPrice();

        // Dtoの生成
        $factory = new Factory($btcPrice);
        $priceListDto = $factory->makePriceGetDto($priceList);

        // DBに挿入
        $db = new BinanceDatabase(BinanceDatabase::TABLE_NAME_PRICE);
        $db->insPriceList($priceListDto);

        return;

    }

}