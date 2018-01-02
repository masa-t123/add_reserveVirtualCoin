<?php

namespace App\Console\Commands\PriceGet4CoinCheck\Factory;

use App\Library\Dto\CoinCheckDto;

class Factory
{
    public function makePriceGetDto(array $priceList)
    {
        $dto = new CoinCheckDto();

        // jpyのみ取得
        $jpyList = $priceList['jpy'];

        $dto->setBtc($jpyList['btc']);
        $dto->setEth($jpyList['eth']);
        $dto->setEtc($jpyList['etc']);
        $dto->setLsk($jpyList['lsk']);
        $dto->setFct($jpyList['fct']);
        $dto->setXmr($jpyList['xmr']);
        $dto->setRep($jpyList['rep']);
        $dto->setXrp($jpyList['xrp']);
        $dto->setZec($jpyList['zec']);
        $dto->setXem($jpyList['xem']);
        $dto->setLtc($jpyList['ltc']);
        $dto->setDash($jpyList['dash']);
        $dto->setBch($jpyList['bch']);

        return $dto;
    }

}