<?php

namespace App\Library\ApiClient\CoinCheckApi;

class CoinCheck
{
    // リクエスト(公開情報)
    const REQUEST_RATE     = 'rate';

    // リクエスト(取引情報)

    // 通貨ペア
    const PAIR_ALL          = 'all';
    const PAIR_BTC_JPY      = 'btc_jpy';
    const PAIR_ETH_JPY      = 'eth_jpy';
    const PAIR_ETC_JPY      = 'etc_jpy';
    const PAIR_LSK_JPY      = 'lsk_jpy';
    const PAIR_FCT_JPY      = 'fct_jpy';
    const PAIR_XMR_JPY      = 'xmr_jpy';
    const PAIR_REP_JPY      = 'rep_jpy';
    const PAIR_XRP_JPY      = 'xrp_jpy';
    const PAIR_ZEC_JPY      = 'zec_jpy';
    const PAIR_XEM_JPY      = 'xem_jpy';
    const PAIR_LTC_JPY      = 'ltc_jpy';
    const PAIR_DASH_JPY     = 'dash_jpy';
    const PAIR_BCH_JPY      = 'bch_jpy';

    public function __construct()
    {
    }


}