<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class rename extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'verus:rename {from : name of table you want to rename} {to : new table name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rename table';

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
     * @return mixed
     */
    public function handle()
    {
        $from = $this->argument('from');

        $to = $this->argument('to');

        DB::statement("ALTER TABLE $from RENAME TO $to");

        $this->info("table $from is renamed to $to successfully");
    }
}
