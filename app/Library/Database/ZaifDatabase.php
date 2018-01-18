<?php

namespace App\Library\Database;

use App\Library\Dto\ZaifDto;
use Illuminate\Support\Facades\DB;

class ZaifDatabase
{
    const TABLE_NAME_PRICE   = 'zaif';
    const TABLE_NAME_AVERAGE = 'zaif_average';

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
     * @param PriceListDto $dto
     * @throws \Exception
     */
    public function insPriceList(ZaifDto $dto)
    {
        $sql = <<<EOL
insert into $this->dbName (
created_at,
updated_at,
btc,
xem,
mona,
bch,
eth,
zaif,
xcp,
bcy,
sjcx,
fscc,
pepecash,
cicc,
ncxc,
jpyz,
cms_eth,
cms_xem
) values (
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
?,
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
            $dto->getXem(),
            $dto->getMona(),
            $dto->getBch(),
            $dto->getEth(),
            $dto->getZaif(),
            $dto->getXcp(),
            $dto->getBcy(),
            $dto->getSjcx(),
            $dto->getFscc(),
            $dto->getPepecash(),
            $dto->getCicc(),
            $dto->getNcxc(),
            $dto->getJpyz(),
            $dto->getCms_eth(),
            $dto->getCms_xem()
        ]);
        if(!$result) {
            DB::rollback();
            throw new \Exception('DBエラー：'.$result);
        }
        DB::commit();

        return;

    }

    /**
     * BTCの最新価格取得
     * @return double $latestData
     */
    public function getBtcPrice()
    {
        $sql = <<< EOF
select btc
from $this->dbName
order by id desc limit 1
EOF;
        $latestData = DB::select($sql);
        $latestData = array_shift($latestData);

        return $latestData->btc;
    }
}