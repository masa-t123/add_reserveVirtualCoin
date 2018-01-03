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
        Commands\AverageGet4Zaif\Controller\AverageGetController::class
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
        $schedule->command('averageGet4Zaif')->daily();
        $schedule->command('averageGet4cc')->daily();
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
