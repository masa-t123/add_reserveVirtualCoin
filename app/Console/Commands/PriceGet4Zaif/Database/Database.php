<?php

namespace App\Console\Commands\PriceGet4Zaif\Database;

use App\Console\Commands\PriceGet4Zaif\Dto\PriceListDto;
use Illuminate\Support\Facades\DB;

class Database
{
    /**
     * 価格情報の挿入
     * @param PriceListDto $dto
     * @throws \Exception
     */
    public function insPriceList(PriceListDto $dto)
    {
        $sql = <<<EOL
insert into zaif (
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
}