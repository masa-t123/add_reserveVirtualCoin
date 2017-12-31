<?php

namespace App\Console\Commands\PriceGet4Zaif\Factory;

use App\Library\Dto\ZaifDto;
use App\Library\ApiClient\ZaifApi\Zaif;

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
        $dto = new ZaifDto();

        foreach ($priceList as $price) {
            foreach ($price as $key => $value) {
                switch ($key) {
                    case Zaif::PAIR_BTC_JPY:
                        $dto->setBtc($value);
                        break;
                    case Zaif::PAIR_BCH_JPY:
                        $dto->setBch($value);
                        break;
                    case Zaif::PAIR_ETH_JPY:
                        $dto->setEth($value);
                        break;
                    case Zaif::PAIR_XEM_JPY:
                        $dto->setXem($value);
                        break;
                    case Zaif::PAIR_MONA_JPY:
                        $dto->setMona($value);
                        break;
                    case Zaif::PAIR_ZAIF_JPY:
                        $dto->setZaif($value);
                        break;
                    case Zaif::PAIR_SJCX_JPY:
                        $dto->setSjcx($value);
                        break;
                    case Zaif::PAIR_JPYZ_JPY:
                        $dto->setJpyz($value);
                        break;
                    case Zaif::PAIR_NCXC_JPY:
                        $dto->setNcxc($value);
                        break;
                    case Zaif::PAIR_FSCC_JPY:
                        $dto->setFscc($value);
                        break;
                    case Zaif::PAIR_CICC_JPY:
                        $dto->setCicc($value);
                        break;
                    case Zaif::PAIR_XCP_JPY:
                        $dto->setXcp($value);
                        break;
                    case Zaif::PAIR_BCY_JPY:
                        $dto->setBcy($value);
                        break;
                    case Zaif::PAIR_PEPECASH_JPY:
                        $dto->setPepecash($value);
                        break;
                    case Zaif::PAIR_CMS_XEM_JPY:
                        $dto->setCms_xem($value);
                        break;
                    case Zaif::PAIR_CMS_ETH_JPY:
                        $dto->setCms_eth($value);
                        break;
                    default:
                        throw new \Exception("Not Set Name:{$key}");
                }
            }
        }

        return $dto;

    }

}