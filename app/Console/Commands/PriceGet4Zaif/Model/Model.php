<?php

namespace App\Console\Commands\PriceGet4Zaif\Model;

use App\Library\Database\ZaifDatabase;
use App\Console\Commands\PriceGet4Zaif\Factory\Factory;
use App\Library\ApiClient\ZaifApi\ZaifApi;
use App\Library\ApiClient\SlackApi\SlackApi;
use App\Library\Common\CurrenciesName;

class Model
{
    public function __construct()
    {
    }

    /**
     * メイン実行
     * @throws \Exception
     */
    public function exec()
    {

        // Zaif APIの実行
        $zaif = new ZaifApi(
            \Config::get('appconfig.zaifToken.key'),
            \Config::get('appconfig.zaifToken.secret')
        );
        $priceList = [];
        foreach ($zaif->getAllPair() as $pair) {
            $result = $zaif->pub(ZaifApi::REQUEST_LAST_PRICE, $pair);
            if(!$result->getIsSuccess()) {
                throw new \Exception('Zaif APIの実行に失敗しました status:'.$result->getStatusCode(). ' response:'.$result->getBody());
            }
            $priceList[] = [$pair => $result->getBody()['last_price']];
        }

        // Dtoの生成
        $factory = new Factory();
        $priceListDto = $factory->makePriceGetDto($priceList);

        // DBに挿入
        $db = new ZaifDatabase(ZaifDatabase::TABLE_NAME_PRICE);
        $db->insPriceList($priceListDto);

//        // Slack通知用
//        $msg = $this->makePriceMsg4Slack($priceList);
//        // Slack APIの実行
//        $slack = new SlackApi(
//            \Config::get('appconfig.slackApi.token1'),
//            \Config::get('appconfig.slackApi.token2'),
//            \Config::get('appconfig.slackApi.token3')
//        );
//        $result = $slack->post(['text' => $msg]);
//        if(!$result->getIsSuccess()) {
//            throw new \Exception('Slack APIの実行に失敗しました status:'.$result->getStatusCode(). ' response:'.$result->getBody());
//        }
        return;

    }

    /**
     * Slack用のメッセージを作成する。
     * @param $priceList
     * @return string
     */
    private function makePriceMsg4Slack($priceList)
    {
        $msg = '';
        $msg .= date('Y-m-d H:i:s')." 取得の値段\n\n";
        foreach ($priceList as $price) {
            foreach ($price as $key => $value) {
                $msg .= CurrenciesName::convertName($key)."：".number_format($value,2)." JPY\n";
            }
        }
        return $msg;

    }
}