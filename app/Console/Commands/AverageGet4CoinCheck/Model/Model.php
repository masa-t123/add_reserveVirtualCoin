<?php
namespace App\Console\Commands\AverageGet4CoinCheck\Model;

use App\Console\Commands\AverageGet4CoinCheck\Database\Database;
use App\Console\Commands\AverageGet4CoinCheck\Factory\Factory;
use App\Library\Database\CoinCheckDatabase;


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

        $db = new CoinCheckDatabase(CoinCheckDatabase::TABLE_NAME_AVERAGE);
        $db->insPriceList($dto);

        return;
    }

}