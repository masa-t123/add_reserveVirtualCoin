<?php
namespace App\Library\Dto;

class BitFlyerDto
{
    private $btc;
    private $fx_btc;
    private $eth;

    public function setBtc($btc)
    {
        $this->btc = $btc;
        return $this;
    }

    public function getBtc()
    {
        return $this->btc;
    }

    public function setFxbtc($fx_btc)
    {
        $this->fx_btc = $fx_btc;
        return $this;
    }

    public function getFxbtc()
    {
        return $this->fx_btc;
    }

    public function setEth($eth)
    {
        $this->eth = $eth;
        return $this;
    }

    public function getEth()
    {
        return $this->eth;
    }

}