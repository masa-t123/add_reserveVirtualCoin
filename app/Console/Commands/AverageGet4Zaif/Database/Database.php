<?php
namespace App\Console\Commands\AverageGet4Zaif\Database;

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
from zaif
where created_at > '$yesterday'
and created_at <= '$today'
EOF;
        $result = DB::select($sql);
        if(!$result) {
            throw new \Exception('DBエラー：'.$result);
        }
        return $result;
    }

}