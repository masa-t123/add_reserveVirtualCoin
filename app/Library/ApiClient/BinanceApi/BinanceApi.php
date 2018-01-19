<?php

namespace App\Library\ApiClient\BinanceApi;

use App\Library\Common\CurlExec;

class BinanceApi extends Binance {

	const PUBLIC_BASE_URL = "https://api.binance.com/api/v1";

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
            case self::PAIR_ALL:
				break;
			default:
				throw new \Exception('Argument has not been set.');
				break;
		}

		$url = self::PUBLIC_BASE_URL.'/'.$endpoint.'/'.$prm;
		$result = CurlExec::get($url);

		return $result;

	}

}
