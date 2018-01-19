<?php
namespace App\Console\Commands\AverageGet4Binance\Database;

use Illuminate\Support\Facades\DB;

class Database
{
    public function getYesterdayData()
    {
        // 今日
        $today = date('Y-m-d');
        // 前日日付
        $yesterday = date("Y-m-d",strtotime("-1 day"));

        $sql = <<<EOF
select * 
from binance
where created_at > '$yesterday'
and created_at <= '$today'
EOF;
        $result = DB::select($sql);
        if(!$result) {
            throw new \Exception('DB ERROR!');
        }
        return $result;
    }

}