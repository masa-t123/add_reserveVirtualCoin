<?php

namespace App\Console\Commands\PriceGet4Zaif\Dto;

class PriceListDto
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

    public function setBtc($btc)
    {
        $this->btc = $btc;
        return $this;
    }

    public function getBtc()
    {
        return $this->btc;
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

    public function setMona($mona)
    {
        $this->mona = $mona;
        return $this;
    }

    public function getMona()
    {
        return $this->mona;
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

    public function setEth($eth)
    {
        $this->eth = $eth;
        return $this;
    }

    public function getEth()
    {
        return $this->eth;
    }

    public function setZaif($zaif)
    {
        $this->zaif = $zaif;
        return $this;
    }

    public function getZaif()
    {
        return $this->zaif;
    }

    public function setXcp($xcp)
    {
        $this->xcp = $xcp;
        return $this;
    }

    public function getXcp()
    {
        return $this->xcp;
    }

    public function setBcy($bcy)
    {
        $this->bcy = $bcy;
        return $this;
    }

    public function getBcy()
    {
        return $this->bcy;
    }

    public function setSjcx($sjcx)
    {
        $this->sjcx = $sjcx;
        return $this;
    }

    public function getSjcx()
    {
        return $this->sjcx;
    }

    public function setFscc($fscc)
    {
        $this->fscc = $fscc;
        return $this;
    }

    public function getFscc()
    {
        return $this->fscc;
    }

    public function setPepecash($pepecash)
    {
        $this->pepecash = $pepecash;
        return $this;
    }

    public function getPepecash()
    {
        return $this->pepecash;
    }

    public function setCicc($cicc)
    {
        $this->cicc = $cicc;
        return $this;
    }

    public function getCicc()
    {
        return $this->cicc;
    }

    public function setNcxc($ncxc)
    {
        $this->ncxc = $ncxc;
        return $this;
    }

    public function getNcxc()
    {
        return $this->ncxc;
    }

    public function setJpyz($jpyz)
    {
        $this->jpyz = $jpyz;
        return $this;
    }

    public function getJpyz()
    {
        return $this->jpyz;
    }

    public function setCms_eth($cms_eth)
    {
        $this->cms_eth = $cms_eth;
        return $this;
    }

    public function getCms_eth()
    {
        return $this->cms_eth;
    }

    public function setCms_xem($cms_xem)
    {
        $this->cms_xem = $cms_xem;
        return $this;
    }

    public function getCms_xem()
    {
        return $this->cms_xem;
    }

}