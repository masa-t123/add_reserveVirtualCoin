<?php

namespace App\Library\ApiClient\BitFlyerApi;

use App\Library\Common\CurlExec;

class BitFlyerApi extends BitFlyer {

	const PUBLIC_BASE_URL = "https://api.bitflyer.jp/v1";

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
            case self::REQUEST_TICKER:
				break;
			default:
				throw new \Exception('Argument has not been set.');
				break;
		}

		switch ($prm) {
            case self::PAIR_BTC_JPY:
            case self::PAIR_FX_BTC_JPY:
            case self::PAIR_ETH_BTC:
				break;
			default:
				throw new \Exception('Argument has not been set.');
				break;
		}

		$url = self::PUBLIC_BASE_URL.'/'.$endpoint.'?product_code='.$prm;
		$result = CurlExec::get($url);

		return $result;

	}

}
