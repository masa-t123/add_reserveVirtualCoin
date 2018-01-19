<?php
namespace App\Console\Commands\AverageGet4Binance\Model;

use App\Console\Commands\AverageGet4Binance\Database\Database;
use App\Console\Commands\AverageGet4Binance\Factory\Factory;
use App\Library\Database\BinanceDatabase;


class Model
{
    public function __construct()
    {
    }

    public function exec()
    {
        // DBから前日分データの取得
        $db = new Database();
        $priceList = $db->getYesterdayData();

        // インスタンス生成
        $factory = new Factory();
        $dto = $factory->makeAverageGetDto($priceList);

        $db = new BinanceDatabase(BinanceDatabase::TABLE_NAME_AVERAGE);
        $db->insPriceList($dto);

        return;
    }

}