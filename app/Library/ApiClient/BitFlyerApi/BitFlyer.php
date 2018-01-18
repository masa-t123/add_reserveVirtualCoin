<?php

namespace App\Library\ApiClient\BitFlyerApi;

class BitFlyer
{
    // リクエスト(公開情報)
    const REQUEST_TICKER     = 'ticker';

    // リクエスト(取引情報)

    // 通貨ペア
    const PAIR_BTC_JPY      = 'btc_jpy';
    const PAIR_FX_BTC_JPY   = 'fx_btc_jpy';
    const PAIR_ETH_BTC      = 'eth_btc';

    public function __construct()
    {
    }

    public function getAllPair()
    {
        return [
            self::PAIR_BTC_JPY,
            self::PAIR_FX_BTC_JPY,
            self::PAIR_ETH_BTC,
        ];
    }


}