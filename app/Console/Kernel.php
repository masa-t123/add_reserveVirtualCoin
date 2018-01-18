<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\PriceGet4Zaif\Controller\PriceGetController::class,
        Commands\AverageGet4Zaif\Controller\AverageGetController::class,
        Commands\PriceGet4CoinCheck\Controller\PriceGetController::class,
        Commands\AverageGet4CoinCheck\Controller\AverageGetController::class,
        Commands\PriceGet4BitFlyer\Controller\PriceGetController::class,
        Commands\AverageGet4BitFlyer\Controller\AverageGetController::class,
        Commands\PriceGet4Binance\Controller\PriceGetController::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('priceGet4Zaif')->everyFiveMinutes();
        $schedule->command('priceGet4cc')->everyFiveMinutes();
        $schedule->command('priceGet4bf')->everyFiveMinutes();
        $schedule->command('averageGet4Zaif')->daily();
        $schedule->command('averageGet4cc')->daily();
        $schedule->command('averageGet4bf')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
