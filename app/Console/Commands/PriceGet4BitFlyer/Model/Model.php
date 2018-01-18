<?php

namespace App\Console\Commands\PriceGet4BF\Model;

use App\Library\ApiClient\BitFlyerApi\BitFlyerApi;
use App\Library\Database\BitFlyerDatabase;
use App\Console\Commands\PriceGet4BitFlyer\Factory\Factory;

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

        // bitFlyer APIの実行
        $bf = new BitFlyerApi(
            \Config::get('appconfig.bitFlyerToken.key'),
            \Config::get('appconfig.bitFlyerToken.secret')
        );
        foreach ($bf->getAllPair() as $pair) {
            $result = $bf->pub(BitFlyerApi::REQUEST_TICKER, $pair);
            if(!$result->getIsSuccess()) {
                throw new \Exception('BitFlyerAPIの実行に失敗しました status:'.$result->getStatusCode(). ' response:'.json_encode($result->getBody()), true);
            }
            $price = $result->getBody()['ltp'];

            // bitcoinの値段退避
            if($pair === BitFlyerApi::PAIR_BTC_JPY) {
                $btc_jpy =  $price;
            }
            // btc建て通貨の場合はjpyに変換
            switch ($pair) {
                case BitFlyerApi::PAIR_ETH_BTC:
                    $price = $price * $btc_jpy;
                    break;
                default:
                    break;
            }
            $priceList[] = [$pair => $price];
        }

        // Dtoの生成
        $factory = new Factory();
        $priceListDto = $factory->makePriceGetDto($priceList);
        // DBに挿入
        $db = new BitFlyerDatabase(BitFlyerDatabase::TABLE_NAME_PRICE);
        $db->insPriceList($priceListDto);

        return;

    }

}