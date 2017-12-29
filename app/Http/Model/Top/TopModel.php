<?php
namespace App\Http\Model\Top;

use App\Http\Model\Model;
use Illuminate\Support\Facades\DB;

class TopModel extends Model
{
    /**
     * トップページ表示用データの取得
     */
    public function getTopData()
    {
        // 最新データ取得
        $sql = <<< EOF
select *
from zaif
order by id desc limit 1
EOF;
        $latestData = DB::select($sql);
        $latestData = array_shift($latestData);

        // 平均データ取得
        $sql = <<< EOF
select *
from zaif_average
order by id desc limit 1
EOF;
        $averageData = DB::select($sql);
        $averageData = array_shift($averageData);

        $result = $this->makeViewData($latestData, $averageData);

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
            'dataList' => null,
            ];
        $dataLayout = [
            'coin' => null,
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
                    $dataLayout['coin']  = 'COMSA(ETH)';
                    $dataLayout['price'] = $this->numFormat($value);
                    $dataLayout['per']   = $this->calcPer($value, $averageData->$key);
                    $itemsLayout['dataList'][] = $dataLayout;
                    break;
                case 'cms_xem':
                    $dataLayout['coin']  = 'COMSA(XEM)';
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
        if ($num < 0) {
            return 0;
        }
        $percent = (($num / $ave) * 100) - 100;
        return round($percent, 3);
    }

}

