<?php

namespace App\Library\Database;

use App\Library\Dto\CoinCheckDto;
use Illuminate\Support\Facades\DB;

class CoinCheckDatabase
{
    const TABLE_NAME_PRICE   = 'coincheck';
    const TABLE_NAME_AVERAGE = 'coincheck_average';

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
     * @param CoinCheckDto $dto
     * @throws \Exception
     */
    public function insPriceList(CoinCheckDto $dto)
    {
        $sql = <<<EOL
insert into $this->dbName (
created_at,
updated_at,
btc,
eth,
etc,
lsk,
fct,
xmr,
rep,
xrp,
zec,
xem,
ltc,
dash,
bch
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
?
)
EOL;

        DB::beginTransaction();

        $result = DB::insert($sql,[
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
            $dto->getBtc(),
            $dto->getEth(),
            $dto->getEtc(),
            $dto->getLsk(),
            $dto->getFct(),
            $dto->getXmr(),
            $dto->getRep(),
            $dto->getXrp(),
            $dto->getZec(),
            $dto->getXem(),
            $dto->getLtc(),
            $dto->getDash(),
            $dto->getBch(),
        ]);
        if(!$result) {
            DB::rollback();
            throw new \Exception('DBエラー：'.$result);
        }
        DB::commit();

        return;

    }
}