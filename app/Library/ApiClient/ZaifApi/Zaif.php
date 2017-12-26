<?php

namespace App\Library\ApiClient\ZaifApi;


class Zaif
{
    // リクエスト(公開情報)
    const REQUEST_CURRENCIES     = 'currencies';
    const REQUEST_CURRENCY_PAIRS = 'currency_pairs';
    const REQUEST_LAST_PRICE     = 'last_price';
    const REQUEST_TICKER         = 'ticker';
    const REQUEST_TRADES         = 'trades';
    const REQUEST_DEPTH          = 'depth';

    // リクエスト(取引情報)
    const REQUEST_GET_INFO          = 'get_info';
    const REQUEST_GET_INFO2         = 'get_info2';
    const REQUEST_GET_PERSONAL_INFO = 'get_personal_info';
    const REQUEST_GET_ID_INFO       = 'get_id_info';
    const REQUEST_TRADE_HISTROY     = 'trade_history';
    const REQUEST_ACTIVE_ORDERS     = 'actice_orders';
    const REQUEST_TRADE             = 'trade';
    const REQUEST_CANCEL_ORDER      = 'cancel_order';
    const REQUEST_WITHDRAW          = 'withdraw';
    const REQUEST_DEPOSIT_HISTORY   = 'deposit_history';
    const REQUEST_WITHDRAW_HISTORY  = 'withdraw_history';

    // 通貨ペア
    const PAIR_ALL          = 'all';
    const PAIR_BTC_JPY      = 'btc_jpy';
    const PAIR_BCH_JPY      = 'bch_jpy';
    const PAIR_ETH_JPY      = 'eth_jpy';
    const PAIR_XEM_JPY      = 'xem_jpy';
    const PAIR_MONA_JPY     = 'mona_jpy';
    const PAIR_ZAIF_JPY     = 'zaif_jpy';
    const PAIR_SJCX_JPY     = 'sjcx_jpy';
    const PAIR_JPYZ_JPY     = 'jpyz_jpy';
    const PAIR_NCXC_JPY     = 'ncxc_jpy';
    const PAIR_FSCC_JPY     = 'fscc_jpy';
    const PAIR_CICC_JPY     = 'cicc_jpy';
    const PAIR_XCP_JPY      = 'xcp_jpy';
    const PAIR_BCY_JPY      = 'bitcrystals_jpy';
    const PAIR_PEPECASH_JPY = 'pepecash_jpy';
    const PAIR_CMS_XEM_JPY  = 'mosaic.cms_jpy';
    const PAIR_CMS_ETH_JPY  = 'erc20.cms_jpy';

    public function __construct()
    {
    }

    public function getAllPair()
    {
        return [
            self::PAIR_BTC_JPY,
            self::PAIR_BCH_JPY,
            self::PAIR_ETH_JPY,
            self::PAIR_XEM_JPY,
            self::PAIR_MONA_JPY,
            self::PAIR_ZAIF_JPY,
            self::PAIR_SJCX_JPY,
            self::PAIR_JPYZ_JPY,
            self::PAIR_NCXC_JPY,
            self::PAIR_FSCC_JPY,
            self::PAIR_CICC_JPY,
            self::PAIR_XCP_JPY,
            self::PAIR_BCY_JPY,
            self::PAIR_PEPECASH_JPY,
            self::PAIR_CMS_XEM_JPY,
            self::PAIR_CMS_ETH_JPY
        ];
    }

    public function getMainPair()
    {
        return [
            self::PAIR_BTC_JPY,
            self::PAIR_BCH_JPY,
            self::PAIR_ETH_JPY,
            self::PAIR_XEM_JPY,
            self::PAIR_MONA_JPY,
        ];
    }


}