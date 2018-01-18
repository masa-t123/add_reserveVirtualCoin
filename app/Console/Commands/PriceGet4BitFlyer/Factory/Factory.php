<?php

namespace App\Console\Commands\PriceGet4BitFlyer\Factory;

use App\Library\Dto\BitFlyerDto;
use App\Library\ApiClient\BitFlyerApi\BitFlyer;

class Factory
{
    /**
     * Dtoの作成
     * @param array $priceList
     * @return PriceListDto
     * @throws \Exception
     */
    public function makePriceGetDto(array $priceList)
    {
        $dto = new BitFlyerDto();

        foreach ($priceList as $price) {
            foreach ($price as $key => $value) {
                switch ($key) {
                    case BitFlyer::PAIR_BTC_JPY:
                        $dto->setBtc($value);
                        break;
                    case BitFlyer::PAIR_FX_BTC_JPY:
                        $dto->setFxbtc($value);
                        break;
                    case BitFlyer::PAIR_ETH_BTC:
                        $dto->setEth($value);
                        break;
                    default:
                        throw new \Exception("Not Set Name:{$key}");
                }
            }
        }

        return $dto;

    }

}