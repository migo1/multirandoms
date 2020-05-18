<?php

namespace App\Console\Commands;

use App\Article;
use App\User;
use Illuminate\Console\Command;

class Hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Hello {name=Bob} {--L|lastname=Migot *.*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is created by make:command ';

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

    $header = ['User Name','Email'];

    $articles = User::select('name','email')->get();

   $this->table($header,$articles);     
    }
}
