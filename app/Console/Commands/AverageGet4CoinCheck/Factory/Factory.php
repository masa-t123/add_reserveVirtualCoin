<?php
namespace App\Console\Commands\AverageGet4CoinCheck\Factory;

use App\Library\Dto\CoinCheckDto;

class Factory
{
    private $btc;
    private $eth;
    private $etc;
    private $lsk;
    private $fct;
    private $xmr;
    private $rep;
    private $xrp;
    private $zec;
    private $xem;
    private $ltc;
    private $dash;
    private $bch;

    public function makeAverageGetDto($priceList)
    {

        foreach ($priceList as $price) {
            foreach ($price as $key => $value) {
                switch ($key) {
                    case 'btc' :
                        $this->btc[] = $value;
                        break;
                    case 'eth':
                        $this->eth[] = $value;
                        break;
                    case 'etc':
                        $this->etc[] = $value;
                        break;
                    case 'lsk':
                        $this->lsk[] = $value;
                        break;
                    case 'fct':
                        $this->fct[] = $value;
                        break;
                    case 'xmr':
                        $this->xmr[] = $value;
                        break;
                    case 'rep':
                        $this->rep[] = $value;
                        break;
                    case 'xrp':
                        $this->xrp[] = $value;
                        break;
                    case 'zec':
                        $this->zec[] = $value;
                        break;
                    case 'xem':
                        $this->xem[] = $value;
                        break;
                    case 'ltc':
                        $this->ltc[] = $value;
                        break;
                    case 'dash':
                        $this->dash[] = $value;
                        break;
                    case 'bch':
                        $this->bch[] = $value;
                        break;
                    default:
                        break;
                }
            }
        }

        $dto = new CoinCheckDto();
        $dto->setBtc(collect($this->btc)->avg());
        $dto->setEth(collect($this->eth)->avg());
        $dto->setEtc(collect($this->etc)->avg());
        $dto->setLsk(collect($this->lsk)->avg());
        $dto->setFct(collect($this->fct)->avg());
        $dto->setXmr(collect($this->xmr)->avg());
        $dto->setRep(collect($this->rep)->avg());
        $dto->setXrp(collect($this->xrp)->avg());
        $dto->setZec(collect($this->zec)->avg());
        $dto->setXem(collect($this->xem)->avg());
        $dto->setLtc(collect($this->ltc)->avg());
        $dto->setDash(collect($this->dash)->avg());
        $dto->setBch(collect($this->bch)->avg());

        return $dto;


    }
}