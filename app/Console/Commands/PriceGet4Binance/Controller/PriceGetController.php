<?php

namespace App\Console\Commands\PriceGet4Binance\Controller;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Console\Commands\PriceGet4Binance\Model\Model;

class PriceGetController extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'priceGet4binance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '価格取得';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('start');
        try {

            $model = new Model();
            $model->exec();
        } catch (\Exception $ex) {
            trigger_error($ex->getMessage());
        }
        Log::info('end');
    }
}
