<?php
namespace App\Console\Commands\AverageGet4BitFlyer\Model;

use App\Console\Commands\AverageGet4BitFlyer\Database\Database;
use App\Console\Commands\AverageGet4BitFlyer\Factory\Factory;
use App\Library\Database\BitFlyerDatabase;


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

        $db = new BitFlyerDatabase(BitFlyerDatabase::TABLE_NAME_AVERAGE);
        $db->insPriceList($dto);

        return;
    }

}