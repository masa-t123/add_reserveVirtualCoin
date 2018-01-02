<?php
namespace App\Library\Dto;

class CoinCheckDto
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

    public function setBtc($btc)
    {
        $this->btc = $btc;
        return $this;
    }

    public function getBtc()
    {
        return $this->btc;
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

    public function setEtc($etc)
    {
        $this->etc = $etc;
        return $this;
    }

    public function getEtc()
    {
        return $this->etc;
    }

    public function setLsk($lsk)
    {
        $this->lsk = $lsk;
        return $this;
    }

    public function getLsk()
    {
        return $this->lsk;
    }

    public function setFct($fct)
    {
        $this->fct = $fct;
        return $this;
    }

    public function getFct()
    {
        return $this->fct;
    }

    public function setXmr($xmr)
    {
        $this->xmr = $xmr;
        return $this;
    }

    public function getXmr()
    {
        return $this->xmr;
    }

    public function setRep($rep)
    {
        $this->rep = $rep;
        return $this;
    }

    public function getRep()
    {
        return $this->rep;
    }

    public function setXrp($xrp)
    {
        $this->xrp = $xrp;
        return $this;
    }

    public function getXrp()
    {
        return $this->xrp;
    }

    public function setZec($zec)
    {
        $this->zec = $zec;
        return $this;
    }

    public function getZec()
    {
        return $this->zec;
    }

    public function setXem($xem)
    {
        $this->xem = $xem;
        return $this;
    }

    public function getXem()
    {
        return $this->xem;
    }

    public function setLtc($ltc)
    {
        $this->ltc = $ltc;
        return $this;
    }

    public function getLtc()
    {
        return $this->ltc;
    }

    public function setDash($dash)
    {
        $this->dash = $dash;
        return $this;
    }

    public function getDash()
    {
        return $this->dash;
    }

    public function setBch($bch)
    {
        $this->bch = $bch;
        return $this;
    }

    public function getBch()
    {
        return $this->bch;
    }

}