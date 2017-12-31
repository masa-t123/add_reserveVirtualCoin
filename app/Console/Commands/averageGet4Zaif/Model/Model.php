<?php
namespace App\Console\Commands\AverageGet4Zaif\Model;

use App\Console\Commands\AverageGet4Zaif\Database\Database;
use App\Console\Commands\AverageGet4Zaif\Factory\Factory;
use App\Library\Database\ZaifDatabase;


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

        $db = new ZaifDatabase(ZaifDatabase::TABLE_NAME_AVERAGE);
        $db->insPriceList($dto);

        return;
    }

}