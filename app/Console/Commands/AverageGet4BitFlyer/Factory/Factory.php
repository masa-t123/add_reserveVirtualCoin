<?php
namespace App\Console\Commands\AverageGet4BitFlyer\Factory;

use App\Library\Dto\BitFlyerDto;

class Factory
{
    private $btc;
    private $fx_btc;
    private $eth;

    public function makeAverageGetDto($priceList)
    {

        foreach ($priceList as $price) {
            foreach ($price as $key => $value) {
                switch ($key) {
                    case 'btc' :
                        $this->btc[] = $value;
                        break;
                    case 'fx_btc' :
                        $this->fx_btc[] = $value;
                        break;
                    case 'eth':
                        $this->eth[] = $value;
                        break;
                    default:
                        break;
                }
            }
        }

        $dto = new BitFlyerDto();
        $dto->setBtc(collect($this->btc)->avg());
        $dto->setFxbtc(collect($this->fx_btc)->avg());
        $dto->setEth(collect($this->eth)->avg());

        return $dto;


    }
}