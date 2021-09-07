<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WebsiteOnlineCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blink:websitecheck';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks a users websites to see if they are online';

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
        $this->info('Everything is online!');
    }
}
