<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class sayBla extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sayBla';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'command me and I will say bla bla bla';

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
        echo "OK\n";
        echo "current db is: " . DB::connection()->getDatabaseName()."\n";
        $this->info("bla bla bla");
    }
}
