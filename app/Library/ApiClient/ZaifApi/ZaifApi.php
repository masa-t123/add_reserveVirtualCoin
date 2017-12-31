<?php

namespace App\Library\ApiClient\ZaifApi;

use App\Library\Common\CurlExec;

class ZaifApi extends Zaif {

	const PUBLIC_BASE_URL = "https://api.zaif.jp/api/1";
	const TRADE_BASE_URL  = "https://api.zaif.jp/tapi";

	private $key;
	private $secret;
	private $nonce;

	public function __construct($key, $secret) {
	    parent::__construct();
		$this->key = $key;
		$this->secret = $secret;
		$this->nonce = time();
	}
		
	public static function pub($endpoint, $prm) {
		switch ($endpoint) {
            case self::REQUEST_LAST_PRICE:
            case self::REQUEST_TICKER:
            case self::REQUEST_TRADES:
            case self::REQUEST_DEPTH:
				break;
			default:
				throw new \Exception('Argument has not been set.');
				break;
		}

		switch ($prm) {
            case self::PAIR_ALL:
            case self::PAIR_BTC_JPY:
            case self::PAIR_BCH_JPY:
            case self::PAIR_ETH_JPY:
            case self::PAIR_XEM_JPY:
            case self::PAIR_MONA_JPY:
            case self::PAIR_ZAIF_JPY:
            case self::PAIR_SJCX_JPY:
            case self::PAIR_JPYZ_JPY:
            case self::PAIR_NCXC_JPY:
            case self::PAIR_FSCC_JPY:
            case self::PAIR_CICC_JPY:
            case self::PAIR_XCP_JPY:
            case self::PAIR_BCY_JPY:
            case self::PAIR_PEPECASH_JPY:
            case self::PAIR_CMS_XEM_JPY:
            case self::PAIR_CMS_ETH_JPY:
				break;
			default:
				throw new \Exception('Argument has not been set.');
				break;
		}

		$url = self::PUBLIC_BASE_URL.'/'.$endpoint.'/'.$prm;
		$result = CurlExec::get($url);

		return $result;

	}

	public function trade($method, $prms=null) {
		switch ($method) {
            case self::REQUEST_GET_INFO:
            case self::REQUEST_GET_INFO2:
            case self::REQUEST_GET_PERSONAL_INFO:
            case self::REQUEST_TRADE_HISTROY:
            case self::REQUEST_ACTIVE_ORDERS:
            case self::REQUEST_TRADE:
            case self::REQUEST_CANCEL_ORDER:
            case self::REQUEST_WITHDRAW:
            case self::REQUEST_DEPOSIT_HISTORY:
            case self::REQUEST_WITHDRAW_HISTORY:
				break;
			default:
				throw new Exception('Argument has not been set.');
				break;
		}

		$postdata = array( "nonce" => $this->nonce++, "method" => $method );
		if( !empty( $prms ) ) {
			$postdata = array_merge( $postdata, $prms );
		}
		$postdata_query = http_build_query( $postdata );
        $sign = hash_hmac( 'sha512', $postdata_query, $this->secret);
		$header = array( "Sign: {$sign}", "Key: {$this->key}", );
		$result = CurlExec::post(self::TRADE_BASE_URL, $header, $postdata_query);

		return $result;
	}

}
