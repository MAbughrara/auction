<?php

namespace App\Console;

use App\Car;
use Carbon\Carbon;
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
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $cars=Car::where('end_date','<',Carbon::now()->toDateTimeString())->get();
            $cars->map(function ($car) {
                if($car->lastbidder()){
                    $buyer_id=($car->lastbidder())->id;
                    $car->update([
                        'buyer_id'=>$buyer_id,
                    ]);
                }

            });
        })->everyMinute();
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
