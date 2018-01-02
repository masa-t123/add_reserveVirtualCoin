<?php
namespace App\Console\Commands\PriceGet4CoinCheck\Model;

use App\Library\ApiClient\CoinCheckApi\CoinCheckApi;
use App\Library\Database\CoinCheckDatabase;
use App\Console\Commands\PriceGet4CoinCheck\Factory\Factory;

class Model
{
    public function __construct()
    {
    }

    public function exec()
    {
        // CoinCheck APIの実行
        $cc = new CoinCheckApi(
            \Config::get('appconfig.coinCheckToken.key'),
            \Config::get('appconfig.coinCheckToken.secret')
        );

        // 全通貨取得
        $result = $cc->pub(CoinCheckApi::REQUEST_RATE, CoinCheckApi::PAIR_ALL);
        if(!$result->getIsSuccess()) {
            throw new \Exception('CoinCheck APIの実行に失敗しました status:'.$result->getStatusCode(). ' response:'.$result->getBody());
        }

        // インスタンス生成
        $factory = new Factory();
        $dto = $factory->makePriceGetDto($result->getBody());

        $db = new CoinCheckDatabase(CoinCheckDatabase::TABLE_NAME_PRICE);
        $db->insPriceList($dto);

        return;

    }
}