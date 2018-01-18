<?php

namespace App\Library\Database;

use App\Library\Dto\BitFlyerDto;
use Illuminate\Support\Facades\DB;

class BitFlyerDatabase
{
    const TABLE_NAME_PRICE   = 'bitflyer';
    const TABLE_NAME_AVERAGE = 'bitflyer_average';

    private $dbName;

    public function __construct($dbName)
    {
        if(strlen($dbName) <= 0){
            throw new \Exception('テーブル名がセットされていません');
        }
        $this->dbName = $dbName;
    }

    /**
     * 価格情報の挿入
     * @param BitFlyerDto $dto
     * @throws \Exception
     */
    public function insPriceList(BitFlyerDto $dto)
    {
        $sql = <<<EOL
insert into $this->dbName (
created_at,
updated_at,
btc,
fx_btc,
eth
) values (
?,
?,
?,
?,
?
)
EOL;

        DB::beginTransaction();

        $result = DB::insert($sql,[
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
            $dto->getBtc(),
            $dto->getFxbtc(),
            $dto->getEth(),
        ]);
        if(!$result) {
            DB::rollback();
            throw new \Exception('DBエラー：'.$result);
        }
        DB::commit();

        return;

    }
}