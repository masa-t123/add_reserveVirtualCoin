<?php
namespace App\Library\Common;

use App\Library\ApiClient\ZaifApi\Zaif;

class CurrenciesName
{
    // 通貨名称
    const NAME_BTC      = 'Bitcoin';
    const NAME_ETH      = 'Ethereum';
    const NAME_ETC      = 'Ethereum Classic';
    const NAME_MONA     = 'Monacoin';
    const NAME_XEM      = 'Nem';
    const NAME_BCH      = 'Bitcoin Cash';
    const NAME_ZAIF     = 'Zaif token';
    const NAME_SJCX     = 'SJCX token';
    const NAME_JPYZ     = 'JPYZ token';
    const NAME_NCXC     = 'NCXC token';
    const NAME_FSCC     = 'FSCC token';
    const NAME_CICC     = 'CICC token';
    const NAME_XCP      = 'XCP token';
    const NAME_BCY      = 'BITCRYSTALS token';
    const NAME_PEPECASH = 'PEPECASH token';
    const NAME_CMS_ETH  = 'COMSA token(ETH)';
    const NAME_CMS_XEM  = 'COMSA token(XEM)';

    public static function convertName($key)
    {
        switch ($key) {
            case Zaif::PAIR_BTC_JPY :
                $name = self::NAME_BTC;
                break;
            case Zaif::PAIR_BCH_JPY:
                $name = self::NAME_BCH;
                break;
            case Zaif::PAIR_ETH_JPY:
                $name = self::NAME_ETH;
                break;
            case Zaif::PAIR_XEM_JPY:
                $name = self::NAME_XEM;
                break;
            case Zaif::PAIR_MONA_JPY:
                $name = self::NAME_MONA;
                break;
            case Zaif::PAIR_ZAIF_JPY:
                $name = self::NAME_ZAIF;
                break;
            case Zaif::PAIR_SJCX_JPY:
                $name = self::NAME_SJCX;
                break;
            case Zaif::PAIR_JPYZ_JPY:
                $name = self::NAME_JPYZ;
                break;
            case Zaif::PAIR_NCXC_JPY:
                $name = self::NAME_NCXC;
                break;
            case Zaif::PAIR_FSCC_JPY:
                $name = self::NAME_FSCC;
                break;
            case Zaif::PAIR_CICC_JPY:
                $name = self::NAME_CICC;
                break;
            case Zaif::PAIR_XCP_JPY:
                $name = self::NAME_XCP;
                break;
            case Zaif::PAIR_BCY_JPY:
                $name = self::NAME_BCY;
                break;
            case Zaif::PAIR_PEPECASH_JPY:
                $name = self::NAME_PEPECASH;
                break;
            case Zaif::PAIR_CMS_XEM_JPY:
                $name = self::NAME_CMS_XEM;
                break;
            case Zaif::PAIR_CMS_ETH_JPY:
                $name = self::NAME_CMS_ETH;
                break;
            default:
                throw new \Exception("Not Set Name:{$key}");
        }

        return $name;

    }

}