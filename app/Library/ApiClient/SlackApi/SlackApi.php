<?php

namespace App\Library\ApiClient\SlackApi;

use App\Library\Common\CurlExec;

Class SlackApi extends Slack
{
    const BASS_URL = 'https://hooks.slack.com/services/';

    private $url;

    public function __construct($token1, $token2, $token3)
    {
        $this->url = self::BASS_URL . $token1 . '/' . $token2 . '/' . $token3;
    }

    public function post($msg)
    {
        $header = array("Content-Type: application/json");
        $result = CurlExec::post($this->url, $header, json_encode($msg));
        return $result;
    }

}