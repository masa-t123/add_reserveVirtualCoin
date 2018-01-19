<?php

namespace App\Console\Commands\PriceGet4Binance\Factory;

use App\Library\Dto\BinanceDto;
use App\Library\ApiClient\BinanceApi\BinanceApi;

class Factory
{
    private $btcPrice;

    public function __construct($btcPrice)
    {
        $this->btcPrice = $btcPrice;
    }

    /**
     * Dtoの作成
     * @param array $priceList
     * @return PriceListDto
     * @throws \Exception
     */
    public function makePriceGetDto(array $priceList)
    {
        $dto = new BinanceDto();
        foreach ($priceList as $price) {
            switch ($price['symbol']) {
                case BinanceApi::PAIR_ETH_BTC:
                    $dto->setEth($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_LTC_BTC:
                    $dto->setLtc($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_BNB_BTC:
                    $dto->setBnb($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_NEO_BTC:
                    $dto->setNeo($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_BCC_BTC:
                    $dto->setBcc($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_GAS_BTC:
                    $dto->setGas($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_HSR_BTC:
                    $dto->setHsr($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_MCO_BTC:
                    $dto->setMco($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_WTC_BTC:
                    $dto->setWtc($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_LRC_BTC:
                    $dto->setLrc($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_QTUM_BTC:
                    $dto->setQtum($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_YOYO_BTC:
                    $dto->setYoyo($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_OMG_BTC:
                    $dto->setOmg($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ZRX_BTC:
                    $dto->setZrx($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_STRAT_BTC:
                    $dto->setStrat($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_SNGLS_BTC:
                    $dto->setSngls($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_BQX_BTC:
                    $dto->setBqx($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_KNC_BTC:
                    $dto->setKnc($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_FUN_BTC:
                    $dto->setFun($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_SNM_BTC:
                    $dto->setSnm($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_IOTA_BTC:
                    $dto->setIota($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_LINK_BTC:
                    $dto->setLink($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_XVG_BTC:
                    $dto->setXvg($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_CTR_BTC:
                    $dto->setCtr($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_SALT_BTC:
                    $dto->setSalt($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_MDA_BTC:
                    $dto->setMda($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_MTL_BTC:
                    $dto->setMtl($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_SUB_BTC:
                    $dto->setSub($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_EOS_BTC:
                    $dto->setEos($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_SNT_BTC:
                    $dto->setSnt($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ETC_BTC:
                    $dto->setEtc($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_MTH_BTC:
                    $dto->setMth($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ENG_BTC:
                    $dto->setEng($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_DNT_BTC:
                    $dto->setDnt($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ZEC_BTC:
                    $dto->setZec($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_BNT_BTC:
                    $dto->setBnt($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_AST_BTC:
                    $dto->setAst($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_DASH_BTC:
                    $dto->setDash($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_OAX_BTC:
                    $dto->setOax($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ICN_BTC:
                    $dto->setIcn($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_BTG_BTC:
                    $dto->setBtg($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_EVX_BTC:
                    $dto->setEvx($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_REQ_BTC:
                    $dto->setReq($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_VIB_BTC:
                    $dto->setVib($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_TRX_BTC:
                    $dto->setTrx($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_POWR_BTC:
                    $dto->setPowr($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ARK_BTC:
                    $dto->setArk($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_XRP_BTC:
                    $dto->setXrp($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_MOD_BTC:
                    $dto->setMod($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ENJ_BTC:
                    $dto->setEnj($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_STORJ_BTC:
                    $dto->setStorj($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_VEN_BTC:
                    $dto->setVen($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_KMD_BTC:
                    $dto->setKmd($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_RCN_BTC:
                    $dto->setRcn($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_NULS_BTC:
                    $dto->setNuls($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_RDN_BTC:
                    $dto->setRdn($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_XMR_BTC:
                    $dto->setXmr($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_DLT_BTC:
                    $dto->setDlt($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_AMB_BTC:
                    $dto->setAmb($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_BAT_BTC:
                    $dto->setBat($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_BCPT_BTC:
                    $dto->setBcpt($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ARN_BTC:
                    $dto->setArn($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_GVT_BTC:
                    $dto->setGvt($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_CDT_BTC:
                    $dto->setCdt($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_GXS_BTC:
                    $dto->setGxs($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_POE_BTC:
                    $dto->setPoe($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_QSP_BTC:
                    $dto->setQsp($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_BTS_BTC:
                    $dto->setBts($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_XZC_BTC:
                    $dto->setXzc($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_LSK_BTC:
                    $dto->setLsk($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_TNT_BTC:
                    $dto->setTnt($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_FUEL_BTC:
                    $dto->setFuel($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_MANA_BTC:
                    $dto->setMana($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_BCD_BTC:
                    $dto->setBcd($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_DGD_BTC:
                    $dto->setDgd($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ADX_BTC:
                    $dto->setAdx($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ADA_BTC:
                    $dto->setAda($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_PPT_BTC:
                    $dto->setPpt($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_CMT_BTC:
                    $dto->setCmt($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_XLM_BTC:
                    $dto->setXlm($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_CND_BTC:
                    $dto->setCnd($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_LEND_BTC:
                    $dto->setLend($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_WABI_BTC:
                    $dto->setWabi($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_TNB_BTC:
                    $dto->setTnb($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_WAVES_BTC:
                    $dto->setWaves($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_GTO_BTC:
                    $dto->setGto($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ICX_BTC:
                    $dto->setIcx($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_OST_BTC:
                    $dto->setOst($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_ELF_BTC:
                    $dto->setElf($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_AION_BTC:
                    $dto->setAion($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_NEBL_BTC:
                    $dto->setNebl($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_BRD_BTC:
                    $dto->setBrd($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_EDO_BTC:
                    $dto->setEdo($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_WINGS_BTC:
                    $dto->setWings($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_NAV_BTC:
                    $dto->setNav($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_LUN_BTC:
                    $dto->setLun($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_TRIG_BTC:
                    $dto->setTrig($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_APPC_BTC:
                    $dto->setAppc($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_VIBE_BTC:
                    $dto->setVibe($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_RLC_BTC:
                    $dto->setRlc($this->getJpyPrice($price['price']));
                    break;
                case BinanceApi::PAIR_INS_BTC:
                    $dto->setIns($this->getJpyPrice($price['price']));
                    break;
                default:
                    break;
            }
        }

        return $dto;

    }

    /**
     * BTCからJPY価格に変換
     * @param $price
     * @return double
     */
    public function getJpyPrice($price)
    {
        $jpyPrice = $this->btcPrice * $price;
        return $jpyPrice;
    }

}