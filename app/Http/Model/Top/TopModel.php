<?php
namespace App\Http\Model\Top;

use App\Http\Model\Model;
use Illuminate\Support\Facades\DB;

class TopModel extends Model
{
    private $getList = [
        'zaif',
        'coincheck',
        'bitflyer',
        'binance',
    ];

    /**
     * トップページ表示用データの取得
     * @return void
     */
    public function getTopData()
    {
        $result = [];

        foreach ($this->getList as $list) {
            // 最新データ取得
            $table = $list;
            $sql = <<< EOF
select *
from $table
order by id desc limit 1
EOF;
            $latestData = DB::select($sql);
            $latestData = array_shift($latestData);

            // 平均データ取得
            $table = "{$list}_average";
            $sql = <<< EOF
select *
from $table
order by id desc limit 1
EOF;
            $averageData = DB::select($sql);
            $averageData = array_shift($averageData);
            $result[$list] = $this->makeViewData($latestData, $averageData);
        }

        return $result;
    }

    /**
     * @param $latestData
     * @param $averageData
     * @return array
     */
    private function makeViewData($latestData, $averageData)
    {

        $itemsLayout = [
            'created_at' => null,
            'dataList'   => null,
            ];
        $dataLayout = [
            'coin'  => null,
            'price' => null,
            'per'   => null,
        ];
        foreach ($latestData as $key => $value) {
            switch ($key) {
                case 'created_at':
                    $itemsLayout['created_at'] = $value;
                    break;
                case 'btc':
                    $dataLayout['coin']  = 'BTC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'fx_btc':
                    $dataLayout['coin']  = 'FX_BTC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'xem':
                    $dataLayout['coin']  = 'XEM';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'mona':
                    $dataLayout['coin']  = 'MONA';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'bch':
                    $dataLayout['coin']  = 'BCH';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'eth':
                    $dataLayout['coin']  = 'ETH';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'etc':
                    $dataLayout['coin']  = 'ETC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'lsk':
                    $dataLayout['coin']  = 'LSK';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'fct':
                    $dataLayout['coin']  = 'FCT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'xmr':
                    $dataLayout['coin']  = 'XMR';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'rep':
                    $dataLayout['coin']  = 'REP';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'xrp':
                    $dataLayout['coin']  = 'XRP';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'zec':
                    $dataLayout['coin']  = 'ZEC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'ltc':
                    $dataLayout['coin']  = 'LTC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'dash':
                    $dataLayout['coin']  = 'DASH';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'zaif':
                    $dataLayout['coin']  = 'ZAIF';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'xcp':
                    $dataLayout['coin']  = 'XCP';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'bcy':
                    $dataLayout['coin']  = 'BCY';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'sjcx':
                    $dataLayout['coin']  = 'SJCX';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'fscc':
                    $dataLayout['coin']  = 'FSCC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'pepecash':
                    $dataLayout['coin']  = 'PEPECASH';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'cicc':
                    $dataLayout['coin']  = 'CICC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'ncxc':
                    $dataLayout['coin']  = 'NCXC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'jpyz':
                    $dataLayout['coin']  = 'JPYZ';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'cms_eth':
                    $dataLayout['coin']  = 'COMSA-ETH';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'cms_xem':
                    $dataLayout['coin']  = 'COMSA-XEM';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                // binance area
                case 'bnb' :
                    $dataLayout['coin']  = 'BNB';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'neo' :
                    $dataLayout['coin']  = 'NEO';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'bcc' :
                    $dataLayout['coin']  = 'BCC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'gas' :
                    $dataLayout['coin']  = 'GAS';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'hsr' :
                    $dataLayout['coin']  = 'HSR';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'mco' :
                    $dataLayout['coin']  = 'MCO';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'wtc' :
                    $dataLayout['coin']  = 'WTC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'lrc' :
                    $dataLayout['coin']  = 'LRC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'qtum' :
                    $dataLayout['coin']  = 'QTUM';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'yoyo' :
                    $dataLayout['coin']  = 'YOYO';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'omg' :
                    $dataLayout['coin']  = 'OMG';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'zrx' :
                    $dataLayout['coin']  = 'ZRX';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'strat' :
                    $dataLayout['coin']  = 'STRAT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'sngls' :
                    $dataLayout['coin']  = 'SNGLS';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'bqx' :
                    $dataLayout['coin']  = 'BQX';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'knc' :
                    $dataLayout['coin']  = 'KNC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'fun' :
                    $dataLayout['coin']  = 'FUN';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'snm' :
                    $dataLayout['coin']  = 'SNM';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'iota' :
                    $dataLayout['coin']  = 'IOTA';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'link' :
                    $dataLayout['coin']  = 'LINK';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'xvg' :
                    $dataLayout['coin']  = 'XVG';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'ctr' :
                    $dataLayout['coin']  = 'CTR';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'salt' :
                    $dataLayout['coin']  = 'SALT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'mda' :
                    $dataLayout['coin']  = 'MDA';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'mtl' :
                    $dataLayout['coin']  = 'MTL';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'sub' :
                    $dataLayout['coin']  = 'SUB';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'eos' :
                    $dataLayout['coin']  = 'EOS';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'snt' :
                    $dataLayout['coin']  = 'SNT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'mth' :
                    $dataLayout['coin']  = 'MTH';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'eng' :
                    $dataLayout['coin']  = 'ENG';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'dnt' :
                    $dataLayout['coin']  = 'DNT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'bnt' :
                    $dataLayout['coin']  = 'BNT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'ast' :
                    $dataLayout['coin']  = 'AST';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'oax' :
                    $dataLayout['coin']  = 'OAX';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'icn' :
                    $dataLayout['coin']  = 'ICN';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'btg' :
                    $dataLayout['coin']  = 'BTG';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'evx' :
                    $dataLayout['coin']  = 'EVX';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'req' :
                    $dataLayout['coin']  = 'REQ';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'vib' :
                    $dataLayout['coin']  = 'VIB';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'trx' :
                    $dataLayout['coin']  = 'TRX';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'powr' :
                    $dataLayout['coin']  = 'POWR';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'ark' :
                    $dataLayout['coin']  = 'ARK';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'mod' :
                    $dataLayout['coin']  = 'MOD';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'enj' :
                    $dataLayout['coin']  = 'ENJ';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'storj' :
                    $dataLayout['coin']  = 'STORJ';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'ven' :
                    $dataLayout['coin']  = 'VEN';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'kmd' :
                    $dataLayout['coin']  = 'KMD';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'rcn' :
                    $dataLayout['coin']  = 'RCN';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'nuls' :
                    $dataLayout['coin']  = 'NULS';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'rdn' :
                    $dataLayout['coin']  = 'RDN';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'dlt' :
                    $dataLayout['coin']  = 'DLT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'amb' :
                    $dataLayout['coin']  = 'AMB';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'bat' :
                    $dataLayout['coin']  = 'BAT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'bcpt' :
                    $dataLayout['coin']  = 'BCPT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'arn' :
                    $dataLayout['coin']  = 'ARN';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'gvt' :
                    $dataLayout['coin']  = 'GVT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'cdt' :
                    $dataLayout['coin']  = 'CDT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'gxs' :
                    $dataLayout['coin']  = 'GXS';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'poe' :
                    $dataLayout['coin']  = 'POE';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'qsp' :
                    $dataLayout['coin']  = 'QSP';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'bts' :
                    $dataLayout['coin']  = 'BTS';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'xzc' :
                    $dataLayout['coin']  = 'XZC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'tnt' :
                    $dataLayout['coin']  = 'TNT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'fuel' :
                    $dataLayout['coin']  = 'FUEL';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'mana' :
                    $dataLayout['coin']  = 'MANA';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'bcd' :
                    $dataLayout['coin']  = 'BCD';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'dgd' :
                    $dataLayout['coin']  = 'DGD';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'adx' :
                    $dataLayout['coin']  = 'ADX';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'ada' :
                    $dataLayout['coin']  = 'ADA';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'ppt' :
                    $dataLayout['coin']  = 'PPT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'cmt' :
                    $dataLayout['coin']  = 'CMT';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'xlm' :
                    $dataLayout['coin']  = 'XLM';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'cnd' :
                    $dataLayout['coin']  = 'CND';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'lend' :
                    $dataLayout['coin']  = 'LEND';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'wabi' :
                    $dataLayout['coin']  = 'WABI';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'tnb' :
                    $dataLayout['coin']  = 'TNB';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'waves' :
                    $dataLayout['coin']  = 'WAVES';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'gto' :
                    $dataLayout['coin']  = 'GTO';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'icx' :
                    $dataLayout['coin']  = 'ICX';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'ost' :
                    $dataLayout['coin']  = 'OST';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'elf' :
                    $dataLayout['coin']  = 'ELF';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'aion' :
                    $dataLayout['coin']  = 'AION';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'nebl' :
                    $dataLayout['coin']  = 'NEBL';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'brd' :
                    $dataLayout['coin']  = 'BRD';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'edo' :
                    $dataLayout['coin']  = 'EDO';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'wings' :
                    $dataLayout['coin']  = 'WINGS';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'nav' :
                    $dataLayout['coin']  = 'NAV';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'lun' :
                    $dataLayout['coin']  = 'LUN';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'trig' :
                    $dataLayout['coin']  = 'TRIG';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'appc' :
                    $dataLayout['coin']  = 'APPC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'vibe' :
                    $dataLayout['coin']  = 'VIBE';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'rlc' :
                    $dataLayout['coin']  = 'RLC';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'ins' :
                    $dataLayout['coin']  = 'INS';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;


            }
        }

        return $itemsLayout;
    }

    /**
     * @param $num
     * @param int $decimal
     * @return mixed|string
     */
    private function numFormat($num, $decimal=3)
    {
        $num = number_format($num, $decimal);
        $num = (preg_match('/\./', $num)) ? preg_replace('/\.?0+$/', '', $num) : $num;

        return $num;
    }

    /**
     * @param $num
     * @param $ave
     * @return float|int
     */
    private function calcPer($num, $ave)
    {
        if ($num < 0 || $ave <= 0) {
            return 0;
        }
        $percent = (($num / $ave) * 100) - 100;
        return round($percent, 3);
    }

}

