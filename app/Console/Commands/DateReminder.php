<?php

namespace App\Console\Commands;

use App\Models\Bottle;
use App\Notifications\DateAlertNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class DateReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:date-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        
        
    }
}
