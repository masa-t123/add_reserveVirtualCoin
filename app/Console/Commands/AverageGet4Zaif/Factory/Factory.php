<?php
namespace App\Console\Commands\AverageGet4Zaif\Factory;

use App\Library\Dto\ZaifDto;

class Factory
{
    private $btc;
    private $xem;
    private $mona;
    private $bch;
    private $eth;
    private $zaif;
    private $xcp;
    private $bcy;
    private $sjcx;
    private $fscc;
    private $pepecash;
    private $cicc;
    private $ncxc;
    private $jpyz;
    private $cms_eth;
    private $cms_xem;

    public function makeAverageGetDto($priceList)
    {

        foreach ($priceList as $price) {
            foreach ($price as $key => $value) {
                switch ($key) {
                    case 'btc' :
                        $this->btc[] = $value;
                        break;
                    case 'xem':
                        $this->xem[] = $value;
                        break;
                    case 'mona':
                        $this->mona[] = $value;
                        break;
                    case 'bch':
                        $this->bch[] = $value;
                        break;
                    case 'eth':
                        $this->eth[] = $value;
                        break;
                    case 'zaif':
                        $this->zaif[] = $value;
                        break;
                    case 'xcp':
                        $this->xcp[] = $value;
                        break;
                    case 'bcy':
                        $this->bcy[] = $value;
                        break;
                    case 'sjcx':
                        $this->sjcx[] = $value;
                        break;
                    case 'fscc':
                        $this->fscc[] = $value;
                        break;
                    case 'pepecash':
                        $this->pepecash[] = $value;
                        break;
                    case 'cicc':
                        $this->cicc[] = $value;
                        break;
                    case 'ncxc':
                        $this->ncxc[] = $value;
                        break;
                    case 'jpyz':
                        $this->jpyz[] = $value;
                        break;
                    case 'cms_eth':
                        $this->cms_eth[] = $value;
                        break;
                    case 'cms_xem':
                        $this->cms_xem[] = $value;
                        break;
                    default:
                        break;
                }
            }
        }

        $dto = new ZaifDto();
        $dto->setBtc(collect($this->btc)->avg());
        $dto->setXem(collect($this->xem)->avg());
        $dto->setMona(collect($this->mona)->avg());
        $dto->setBch(collect($this->bch)->avg());
        $dto->setEth(collect($this->eth)->avg());
        $dto->setZaif(collect($this->zaif)->avg());
        $dto->setXcp(collect($this->xcp)->avg());
        $dto->setBcy(collect($this->bcy)->avg());
        $dto->setSjcx(collect($this->sjcx)->avg());
        $dto->setFscc(collect($this->fscc)->avg());
        $dto->setPepecash(collect($this->pepecash)->avg());
        $dto->setCicc(collect($this->cicc)->avg());
        $dto->setNcxc(collect($this->ncxc)->avg());
        $dto->setJpyz(collect($this->jpyz)->avg());
        $dto->setCms_eth(collect($this->cms_eth)->avg());
        $dto->setCms_xem(collect($this->cms_xem)->avg());

        return $dto;


    }
}