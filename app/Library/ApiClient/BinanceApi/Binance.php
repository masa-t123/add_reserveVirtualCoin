<?php

namespace App\Library\ApiClient\BinanceApi;

class Binance
{
    // リクエスト(公開情報)
    const REQUEST_TICKER     = 'ticker';

    // リクエスト(取引情報)

    // 通貨ペア
    const PAIR_ALL = 'allPrices';

    const PAIR_ETH_BTC = 'ETHBTC';
    const PAIR_LTC_BTC = 'LTCBTC';
    const PAIR_BNB_BTC = 'BNBBTC';
    const PAIR_NEO_BTC = 'NEOBTC';
    const PAIR_BCC_BTC = 'BCCBTC';
    const PAIR_GAS_BTC = 'GASBTC';
    const PAIR_HSR_BTC = 'HSRBTC';
    const PAIR_MCO_BTC = 'MCOBTC';
    const PAIR_WTC_BTC = 'WTCBTC';
    const PAIR_LRC_BTC = 'LRCBTC';
    const PAIR_QTUM_BTC = 'QTUMBTC';
    const PAIR_YOYO_BTC = 'YOYOBTC';
    const PAIR_OMG_BTC = 'OMGBTC';
    const PAIR_ZRX_BTC = 'ZRXBTC';
    const PAIR_STRAT_BTC = 'STRATBTC';
    const PAIR_SNGLS_BTC = 'SNGLSBTC';
    const PAIR_BQX_BTC = 'BQXBTC';
    const PAIR_KNC_BTC = 'KNCBTC';
    const PAIR_FUN_BTC = 'FUNBTC';
    const PAIR_SNM_BTC = 'SNMBTC';
    const PAIR_IOTA_BTC = 'IOTABTC';
    const PAIR_LINK_BTC = 'LINKBTC';
    const PAIR_XVG_BTC = 'XVGBTC';
    const PAIR_CTR_BTC = 'CTRBTC';
    const PAIR_SALT_BTC = 'SALTBTC';
    const PAIR_MDA_BTC = 'MDABTC';
    const PAIR_MTL_BTC = 'MTLBTC';
    const PAIR_SUB_BTC = 'SUBBTC';
    const PAIR_EOS_BTC = 'EOSBTC';
    const PAIR_SNT_BTC = 'SNTBTC';
    const PAIR_ETC_BTC = 'ETCBTC';
    const PAIR_MTH_BTC = 'MTHBTC';
    const PAIR_ENG_BTC = 'ENGBTC';
    const PAIR_DNT_BTC = 'DNTBTC';
    const PAIR_ZEC_BTC = 'ZECBTC';
    const PAIR_BNT_BTC = 'BNTBTC';
    const PAIR_AST_BTC = 'ASTBTC';
    const PAIR_DASH_BTC = 'DASHBTC';
    const PAIR_OAX_BTC = 'OAXBTC';
    const PAIR_ICN_BTC = 'ICNBTC';
    const PAIR_BTG_BTC = 'BTGBTC';
    const PAIR_EVX_BTC = 'EVXBTC';
    const PAIR_REQ_BTC = 'REQBTC';
    const PAIR_VIB_BTC = 'VIBBTC';
    const PAIR_TRX_BTC = 'TRXBTC';
    const PAIR_POWR_BTC = 'POWRBTC';
    const PAIR_ARK_BTC = 'ARKBTC';
    const PAIR_XRP_BTC = 'XRPBTC';
    const PAIR_MOD_BTC = 'MODBTC';
    const PAIR_ENJ_BTC = 'ENJBTC';
    const PAIR_STORJ_BTC = 'STORJBTC';
    const PAIR_VEN_BTC = 'VENBTC';
    const PAIR_KMD_BTC = 'KMDBTC';
    const PAIR_RCN_BTC = 'RCNBTC';
    const PAIR_NULS_BTC = 'NULSBTC';
    const PAIR_RDN_BTC = 'RDNBTC';
    const PAIR_XMR_BTC = 'XMRBTC';
    const PAIR_DLT_BTC = 'DLTBTC';
    const PAIR_AMB_BTC = 'AMBBTC';
    const PAIR_BAT_BTC = 'BATBTC';
    const PAIR_BCPT_BTC = 'BCPTBTC';
    const PAIR_ARN_BTC = 'ARNBTC';
    const PAIR_GVT_BTC = 'GVTBTC';
    const PAIR_CDT_BTC = 'CDTBTC';
    const PAIR_GXS_BTC = 'GXSBTC';
    const PAIR_POE_BTC = 'POEBTC';
    const PAIR_QSP_BTC = 'QSPBTC';
    const PAIR_BTS_BTC = 'BTSBTC';
    const PAIR_XZC_BTC = 'XZCBTC';
    const PAIR_LSK_BTC = 'LSKBTC';
    const PAIR_TNT_BTC = 'TNTBTC';
    const PAIR_FUEL_BTC = 'FUELBTC';
    const PAIR_MANA_BTC = 'MANABTC';
    const PAIR_BCD_BTC = 'BCDBTC';
    const PAIR_DGD_BTC = 'DGDBTC';
    const PAIR_ADX_BTC = 'ADXBTC';
    const PAIR_ADA_BTC = 'ADABTC';
    const PAIR_PPT_BTC = 'PPTBTC';
    const PAIR_CMT_BTC = 'CMTBTC';
    const PAIR_XLM_BTC = 'XLMBTC';
    const PAIR_CND_BTC = 'CNDBTC';
    const PAIR_LEND_BTC = 'LENDBTC';
    const PAIR_WABI_BTC = 'WABIBTC';
    const PAIR_TNB_BTC = 'TNBBTC';
    const PAIR_WAVES_BTC = 'WAVESBTC';
    const PAIR_GTO_BTC = 'GTOBTC';
    const PAIR_ICX_BTC = 'ICXBTC';
    const PAIR_OST_BTC = 'OSTBTC';
    const PAIR_ELF_BTC = 'ELFBTC';
    const PAIR_AION_BTC = 'AIONBTC';
    const PAIR_NEBL_BTC = 'NEBLBTC';
    const PAIR_BRD_BTC = 'BRDBTC';
    const PAIR_EDO_BTC = 'EDOBTC';
    const PAIR_WINGS_BTC = 'WINGSBTC';
    const PAIR_NAV_BTC = 'NAVBTC';
    const PAIR_LUN_BTC = 'LUNBTC';
    const PAIR_TRIG_BTC = 'TRIGBTC';
    const PAIR_APPC_BTC = 'APPCBTC';
    const PAIR_VIBE_BTC = 'VIBEBTC';
    const PAIR_RLC_BTC = 'RLCBTC';
    const PAIR_INS_BTC = 'INSBTC';

    public function __construct()
    {
    }


}